<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForlandM6Controller extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland', 
                'name' => 'Forland M6', 
                'type' => 'Light Trucks', 
                'category' => 'light-trucks', 
                'description' => 'The Forland M6 is a medium-duty 4x2 truck designed for versatile cargo transport, featuring a durable chassis and a reliable engine suitable for urban and regional delivery operations. Its practical design, strong load capacity, and efficiency make it ideal for businesses requiring dependable performance for various commercial applications.', 
                'image' => '/images/Forland-M6.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.forlandM6',[
            'products' => $products
        ]);
    }
}
