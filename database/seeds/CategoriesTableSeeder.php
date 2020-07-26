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
            ['name' => 'Легковые автомобили', 'slug' => 'cars'],
            ['name' => 'Грузовые и автобусы', 'slug' => 'trucks'],
            ['name' => 'Коммерческий транспорт', 'slug' => 'commercial'],
            ['name' => 'Мотоциклы', 'slug' => 'motorcycles'],
        ]);
    }
}
