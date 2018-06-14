<?php

namespace App\Http\Controllers;

use App\Product;
use App\Set;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ProductController extends Controller
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
     * Get the information of a single product.
     *
     * @param int $id The ID of the required product.
     *
     * @return json (Lumen Collection)
     */
    public function showProduct($id)
    {
        // Get information for the product from database.
    	$product = Product::join('colors', 'products.prod_color', '=', 'colors.color_id')
    						->join('materials', 'products.prod_material', '=', 'materials.material_id')
                            ->where('prod_id', $id)
    						->first();

        // Get the rating for the required product.
        $ratings = Rating::select('rating_rate')
                           ->where('rating_product', '=', $product->prod_id)
                           ->get();

        // Get all sets that include the required product.
        $sets = Set::where('set_set', 'rlike', '[[:<:]]'.$product->prod_id.'[[:>:]]')->get();


        // Execute this function for every set of products.
        $sets->map(function($set) use ($id) {

            // Make a collection of all items in set_set column of current set record.
            $items = collect(explode(', ', $set->set_set));

            // Execute this function for all elements of "items" collection.
            $items->map(function ($item, $itemKey) use ($items, $id) {

                // Remove all zero-items and the required product.
                if($item == 0 or $item == $id) {
                    $items->forget($itemKey);
                }
            });

            // Prepending the required product, so it could appear first in sets.
            $items->prepend("".$id."");

            // Execute this function for all element of the above collection
            // and store the data into a new variable.
            $setItems = $items->map(function($setItem, $itemKey) {

                // Get information about the current product
                $item = Product::where('prod_id', $setItem)->first();

                // Swap the image of a set item with it's base64-encoded file contents.
                $item->prod_image = base64_encode(file_get_contents('images/items/'.$item->prod_image));

                return $item;
            });

            // Make a collection of all items in a set.
            $setItems = collect($setItems);

            // Insert all items in the current set collection.
            $set['set_items'] = $setItems;

            return $set;
        });

        // Swap the image of the required product with it's base64-encoded file contents.
        $product->prod_image = base64_encode(file_get_contents('images/items/'.$product->prod_image));

        // Insert the "sets" collection into the "product" collection.
        $product['sets'] = $sets;

        // Get the average rating of the required product, 
        // format it with two decimal places, 
        // and insert it in the "product" collection.
        $averageRating = $ratings->average('rating_rate');
        $formattedRating = number_format($averageRating, 2);
        $product['rating'] = $formattedRating;

        return response()->json($product);
    }


    /**
     * Create a new ratings record for a product in database and give back
     * the NEW average rating of this product.
     *
     * @param Request Form-submitted data.
     *
     * @return float The new average rating.
     */    
    public function rateProduct(Request $request)
    {

        // Create a new empty Rating collection.
        $rating = new Rating;

        // Populate the "rating" collection with the values,
        // got from the user-submitted form.
        $rating->rating_product = $request->product;
        $rating->rating_rate = $request->userRating;

        // Save the "rating" collection to database.
        $rating->save();


        // Get all ratings records for the required product.
        $newRating = Rating::select('rating_rate')->where('rating_product', $request->product)->get();

        // Get the average rating of the required product, 
        // and format it with two decimal places.
        $averageRating = $newRating->average('rating_rate');
        $formattedRating = number_format($averageRating, 2);

        return response()->json($formattedRating);
    }
}