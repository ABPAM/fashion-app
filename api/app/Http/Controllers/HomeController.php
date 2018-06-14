<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Rating;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show all products in database.
     *
     * @return json (Lumen Collection)
     */
    public function index()
    {
        // Get all products
    	$products = Product::join('colors', 'products.prod_color', '=', 'colors.color_id')
    						->join('materials', 'products.prod_material', '=', 'materials.material_id')
    						->get();

        // Execute this function for every product.
    	$products->map(function ($product) {

            // Swap the image column of a product with it's base64-ed file contents.
    		$product->prod_image = base64_encode(file_get_contents('images/items/'.$product->prod_image));
    	});

        // Get ratings for all products
        $ratings = Rating::select('rating_product', 'rating_rate')->get();

        // Execute this function for every product
        $products->map(function ($product) use ($ratings){

            // Get the average rating of the current product, 
            // format it with two decimal places, 
            // and insert it in the current product collection.

            $averageRating = $ratings->where('rating_product', $product->prod_id)->average('rating_rate');
            $formattedRating = number_format($averageRating, 2);
            $product['rating'] = $formattedRating;
        });

        return response()->json($products);
    }

    /**
     * Get a list of all categories.
     *
     * @return json (Lumen Collection)
     */
    public function sidenav()
    {
        $categories = Category::all();

        return response()->json($categories);
    }
}