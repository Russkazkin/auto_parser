<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Легковые автомобили', 'slug' => 'cars', 'node_name' => '#bmVendorTypesC0'],
            ['name' => 'Грузовые и автобусы', 'slug' => 'trucks', 'node_name' => '#bmVendorTypesC1'],
            ['name' => 'Коммерческий транспорт', 'slug' => 'commercial', 'node_name' => '#bmVendorTypesC2'],
            ['name' => 'Мотоциклы', 'slug' => 'motorcycles', 'node_name' => '#bmVendorTypesC3'],
        ]);
    }
}
