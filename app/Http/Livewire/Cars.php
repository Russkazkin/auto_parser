<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Manufacturer;
use Eloquent;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Symfony\Component\DomCrawler\Crawler;

class Cars extends Component
{
    public function getCars()
    {
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Car::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        set_time_limit(3600);
        $manufacturers = Manufacturer::all();
        $car = 0;
        foreach ($manufacturers as $manufacturer)
        {
            $link = 'https://exist.ru' . $manufacturer->uri . '/?all=1';
            $html = file_get_contents($link);

            $crawler = new Crawler(null, $link);
            $crawler->addHtmlContent($html);
            $crawler->filter('.cell2')->each(function (Crawler $parentCrawler) use ($manufacturer){
                $name_node = $parentCrawler->filter('.car-info__car-name > a');
                $name = $name_node->text();
                $uri = $name_node->attr('href');
                $years_node = $parentCrawler->filter('.car-info__car-years');
                $years = $years_node->text();
                Car::create([
                    'name' => $name,
                    'years' => $years,
                    'uri' => $uri,
                    'manufacturer_id' => $manufacturer->id,
                ]);
            });
            $car++;
            session(['car' => $car]);
        }
    }

    public function render()
    {
        return view('livewire.cars');
    }
}
