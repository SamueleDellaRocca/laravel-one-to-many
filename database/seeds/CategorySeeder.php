<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'sport'
            ],
            [
                'name' => 'economia'
            ],
            [
                'name' => 'tecnologia'
            ],
            [
                'name' => 'politica'
            ],
            [
                'name' => 'scienze'
            ],
            [
                'name' => 'fotografia'
            ],
            [
                'name' => 'moda'
            ],
            [
                'name' => 'cronaca'
            ],
            ];


            foreach ($categories as $category) {
                Category::create($category);
            }
    }
}
