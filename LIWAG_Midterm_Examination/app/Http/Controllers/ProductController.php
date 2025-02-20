<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'iPhone 15', 'brand' => 'Apple', 'price' => '$999'],
            ['name' => 'Samsung Galaxy S23', 'brand' => 'Samsung', 'price' => '$899'],
            ['name' => 'MacBook Air M2', 'brand' => 'Apple', 'price' => '$1199'],
            ['name' => 'Sony WH-1000XM5', 'brand' => 'Sony', 'price' => '$399'],
        ];

        return view('products.index', compact('products'));
    }
}
