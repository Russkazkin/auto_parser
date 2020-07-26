<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class ParserController extends Controller
{
    public function index()
    {
        $link = 'https://exist.ru/Catalog/Global/';
        $html = file_get_contents($link);

        $crawler = new Crawler(null, $link);
        $crawler->addHtmlContent($html);
        $crawler->filter('#bmVendorTypesC0 > .catalog-content-header > .top-r > .catalog-column > ul > li > a')->each(function ($node){
            Manufacturer::create([
                'name' => $node->text(),
                'uri' => $node->attr('href'),
                'category_id' => 1,
            ]);
        });

        return view('parser.index');
    }
}
