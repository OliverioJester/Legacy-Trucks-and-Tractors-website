<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShacmanSelfLoaderController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'shacman', 
                'name' => 'Shacman Self Loader', 
                'type' => 'Construction & Utility Vehicles', 
                'category'=> 'construction-utility-vehicles',
                'description' => 'The Shacman Self Loader is a heavy-duty recovery and transport truck designed for efficient vehicle loading and hauling, equipped with a powerful hydraulic system, durable chassis, and reliable performance suited for towing, roadside assistance, and equipment transport operations.', 
                'image' => '/images/shacman_self_loader.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.shacman.shacmanSelfLoader',[
            'products' => $products
        ]);
    }
}
