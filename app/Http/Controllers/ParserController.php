<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class ParserController extends Controller
{
    public function index()
    {
        return view('parser.index');
    }

    public function manufacturers()
    {
        $categories = Category::all();
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
        }
        return view('parser.manufacturers');
    }

    public function cars()
    {
        set_time_limit(3600);
        $manufacturers = Manufacturer::all();
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
        }
        return view('parser.cars');
    }
}
