<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CategoryController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get all products that belong to the required category.
     *
     * @param int $id The required category's ID.
     *
     * @return json (Lumen Collection)
     */
    public function showCategory($id)
    {
        // Get products with prod_category=$id
    	$products = Product::join('colors', 'products.prod_color', '=', 'colors.color_id')
    						->join('materials', 'products.prod_material', '=', 'materials.material_id')
                            ->where('prod_category', $id)
    						->get();

        // Change the image of each product with it's base64-ed file content.
    	$products->map(function ($product) {
    		$product->prod_image = base64_encode(file_get_contents('images/items/'.$product->prod_image));
    	});

        return response()->json($products);
    }

}
