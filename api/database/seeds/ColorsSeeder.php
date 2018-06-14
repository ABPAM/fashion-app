<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'color_name' => 'Blue'
        ]);

        Color::create([
            'color_name' => 'Red'
        ]);

        Color::create([
            'color_name' => 'Grey'
        ]);

        Color::create([
            'color_name' => 'Black'
        ]);

        Color::create([
            'color_name' => 'Burgundy'
        ]);
    }
}
