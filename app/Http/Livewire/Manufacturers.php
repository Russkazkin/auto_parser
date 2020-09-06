<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Manufacturer;
use Eloquent;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Symfony\Component\DomCrawler\Crawler;

class Manufacturers extends Component
{
    public function getManufacturers()
    {
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Manufacturer::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $categories = Category::all();
        $manufacturer = 0;
        foreach ($categories as $category) {
            $link = 'https://exist.ru/Catalog/Global/';
            $html = file_get_contents($link);

            $crawler = new Crawler(null, $link);
            $crawler->addHtmlContent($html);
            $crawler->filter($category->node_name . ' > .catalog-content-header > .top-r > .catalog-column > ul > li > a')->each(function ($node) use ($category){
                Manufacturer::create([
                    'name' => $node->text(),
                    'uri' => $node->attr('href'),
                    'category_id' => $category->id,
                ]);
            });
            $manufacturer++;
            session(['manufacturer' => $manufacturer]);
            session(['category' => $category->name]);
        }
    }

    public function render()
    {
        return view('livewire.manufacturers');
    }
}
