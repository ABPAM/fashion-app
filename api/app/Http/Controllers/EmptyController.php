<?php

namespace App\Http\Controllers;

class EmptyController extends Controller
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
     * Return an 'empty' message.
     *
     * @return json (string) 'empty'
     */
    public function showEmpty ($id) 
    {
        return response()->json('empty');
    }
}
