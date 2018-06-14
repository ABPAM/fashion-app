<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'cat_name' => 'Coats'
        ]);
        
        Category::create([
            'cat_name' => 'Shirts'
        ]);
        
        Category::create([
            'cat_name' => 'Trousers'
        ]);
    }
}
