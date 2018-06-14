<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'product_name', 
    	'product_description', 
    	'prod_category', 
		'prod_size', 
		'prod_color', 
		'prod_price', 
		'prod_image', 
		'prod_material'
    ];
}
