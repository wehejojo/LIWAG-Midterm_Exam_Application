<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Klok',       'brand' => 'Moment', 'price' => '$5'],
            ['name' => 'Kalkulator', 'brand' => 'Moment', 'price' => '$2'],
            ['name' => 'Kar',        'brand' => 'Moment', 'price' => '$40000'],
            ['name' => 'Kamera',     'brand' => 'Moment', 'price' => '$25'],
            ['name' => 'Kompass',    'brand' => 'Moment', 'price' => '$16'],
        ];

        return view('products.index', compact('products'));
    }
}
