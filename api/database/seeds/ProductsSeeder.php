<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'prod_name' => 'Men\'s Spring Jacket', 
            'prod_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada, ex quis suscipit sagittis, odio turpis iaculis nisi, sit amet vehicula nisl lacus in tellus. Pellentesque vulputate, massa sit amet dictum maximus, turpis sem blandit odio, auctor ultrices urna eros eu mi.', 
            'prod_category' => 1, 
            'prod_size' => 'l', 
            'prod_color' => 2, 
            'prod_price' => 115.00, 
            'prod_image' => 'prod_1.jpg', 
            'prod_material' => 3
        ]);

        Product::create([
            'prod_name' => 'James Bond', 
            'prod_description' => 'Aenean dapibus ante at justo varius, quis sodales nisi viverra. Vivamus id luctus massa. Aenean ornare ut diam ut bibendum. Quisque sed nisl a magna ornare pulvinar.', 
            'prod_category' => 1, 
            'prod_size' => 'm', 
            'prod_color' => 1, 
            'prod_price' => 300.00, 
            'prod_image' => 'prod_2.jpg', 
            'prod_material' => 1
        ]);

        Product::create([
            'prod_name' => 'Linen Jacket', 
            'prod_description' => 'Praesent accumsan ante venenatis ligula fringilla porta. Nullam rutrum nunc pellentesque lorem bibendum hendrerit. Sed blandit euismod tortor. Aenean facilisis egestas convallis.', 
            'prod_category' => 1, 
            'prod_size' => 'm', 
            'prod_color' => 5, 
            'prod_price' => 80.25, 
            'prod_image' => 'prod_3.jpg', 
            'prod_material' => 1
        ]);

        Product::create([
            'prod_name' => 'Bomber Jacket', 
            'prod_description' => 'Vestibulum sollicitudin magna sit amet odio ornare suscipit. Pellentesque rhoncus justo turpis, et tincidunt turpis ornare et. Aenean ac arcu ex. Nam gravida nulla ac gravida sollicitudin.', 
            'prod_category' => 1, 
            'prod_size' => 's', 
            'prod_color' => 4, 
            'prod_price' => 30.50, 
            'prod_image' => 'prod_4.jpg', 
            'prod_material' => 5
        ]);


        Product::create([
            'prod_name' => 'Men\'s shirt', 
            'prod_description' => 'Nulla eleifend hendrerit orci vel fringilla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam commodo pretium luctus.', 
            'prod_category' => 2, 
            'prod_size' => 'l', 
            'prod_color' => 4, 
            'prod_price' => 30.00, 
            'prod_image' => 'prod_5.jpg', 
            'prod_material' => 2
        ]);

        Product::create([
            'prod_name' => 'Garry\'s spring shirt', 
            'prod_description' => 'Suspendisse sed aliquet mauris. Quisque vestibulum pulvinar congue. Vivamus nec tortor ex. Fusce vestibulum, mi non tristique varius, dui mi commodo risus, in porta felis urna at nibh.', 
            'prod_category' => 2, 
            'prod_size' => 'm', 
            'prod_color' => 3, 
            'prod_price' => 45.70, 
            'prod_image' => 'prod_6.jpg', 
            'prod_material' => 1
        ]);

        Product::create([
            'prod_name' => 'Gentleman', 
            'prod_description' => 'Quisque ac blandit eros. Maecenas viverra mattis aliquam. Cras condimentum nec sem eu imperdiet. Sed quis eros condimentum, malesuada felis sit amet, mollis nisi. Nam viverra at neque non venenatis.', 
            'prod_category' => 2, 
            'prod_size' => 'm', 
            'prod_color' => 1, 
            'prod_price' => 62.25, 
            'prod_image' => 'prod_7.jpg', 
            'prod_material' => 3
        ]);

        Product::create([
            'prod_name' => 'Button-down shirt', 
            'prod_description' => 'Ut quis enim nec sem efficitur imperdiet in sit amet erat. Phasellus ullamcorper lectus ut neque commodo, et bibendum urna congue. Fusce euismod vitae neque quis tempus.', 
            'prod_category' => 2, 
            'prod_size' => 's', 
            'prod_color' => 1, 
            'prod_price' => 27.45, 
            'prod_image' => 'prod_8.jpg', 
            'prod_material' => 4
        ]);

        Product::create([
            'prod_name' => 'Men\'s pants', 
            'prod_description' => 'Integer libero nisi, condimentum et ultrices ut, semper vitae ante. Fusce gravida tellus justo, euismod placerat ex posuere sodales. Fusce ut consequat enim, ac bibendum ipsum.', 
            'prod_category' => 3, 
            'prod_size' => 'l', 
            'prod_color' => 4, 
            'prod_price' => 50.35, 
            'prod_image' => 'prod_9.jpg', 
            'prod_material' => 1
        ]);

        Product::create([
            'prod_name' => 'Chinos', 
            'prod_description' => 'Sed tincidunt enim nec ex commodo maximus. Aliquam egestas dapibus ornare. Donec congue mauris eget tempor dignissim. Suspendisse pulvinar feugiat tellus eget tempor.', 
            'prod_category' => 3, 
            'prod_size' => 'm', 
            'prod_color' => 2, 
            'prod_price' => 32.70, 
            'prod_image' => 'prod_10.jpg', 
            'prod_material' => 2
        ]);

        Product::create([
            'prod_name' => 'Jeans', 
            'prod_description' => 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut molestie cursus urna, sed accumsan nunc placerat dignissim. Nullam quis congue ligula. Quisque commodo metus auctor finibus lacinia.', 
            'prod_category' => 3, 
            'prod_size' => 'm', 
            'prod_color' => 1, 
            'prod_price' => 37.15, 
            'prod_image' => 'prod_11.jpg', 
            'prod_material' => 3
        ]);

        Product::create([
            'prod_name' => 'Cargo pants', 
            'prod_description' => 'Aenean nunc arcu, varius vitae libero vitae, elementum pulvinar ex. Curabitur non rhoncus arcu, in congue nunc. Fusce at gravida massa. Vestibulum sit amet lacinia sem. Donec ac purus nisi. Cras sodales felis quam.', 
            'prod_category' => 3, 
            'prod_size' => 's', 
            'prod_color' => 3, 
            'prod_price' => 36.25, 
            'prod_image' => 'prod_12.jpg', 
            'prod_material' => 4
        ]);
    }
}
