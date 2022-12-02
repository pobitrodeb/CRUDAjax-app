<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
      return view('home.index');
    }
    public function addProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products', 
            'price' => 'required', 
        ],
        [
              'name.required'   => 'Name is required',  
              'price.unique'    => 'Name must be unique',  
              'price.required'  => 'Price is Required',  
        ]); 
       
    }
}
