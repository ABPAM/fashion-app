<?php

use Illuminate\Database\Seeder;
use App\Set;

class SetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Set::create([
        	'set_set' => '1, 7, 10'
        ]);

        Set::create([
        	'set_set' => '1, 8, 9'
        ]);

        Set::create([
        	'set_set' => '2, 6, 9'
        ]);

        Set::create([
        	'set_set' => '2, 7, 11'
        ]);

        Set::create([
        	'set_set' => '3, 8, 10'
        ]);

        Set::create([
        	'set_set' => '3, 7, 9'
        ]);

        Set::create([
        	'set_set' => '4, 5, 12'
        ]);

		Set::create([
        	'set_set' => '4, 6, 11'
        ]);

		Set::create([
        	'set_set' => '0, 6, 12'
        ]);

        Set::create([
            'set_set' => '0, 8, 10'
        ]);
    }
}
