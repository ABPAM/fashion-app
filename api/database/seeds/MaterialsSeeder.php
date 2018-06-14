<?php

use Illuminate\Database\Seeder;
use App\Material;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'material_name' => 'Linen'
        ]);

        Material::create([
            'material_name' => 'Wool'
        ]);

        Material::create([
            'material_name' => 'Cotton'
        ]);

        Material::create([
            'material_name' => 'Silk'
        ]);

        Material::create([
            'material_name' => 'Polyester'
        ]);
    }
}
