<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post\Category::create([
            'name' => 'Танилцуулга'
        ]);

        \App\Post\Category::create([
            'name' => 'Зээл'
        ]);

        \App\Post\Category::create([
            'name' => 'Мэдээ мэдээлэл'
        ]);

        \App\Post\Category::create([
            'name' => 'Ажлын байр'
        ]);
    }
}
