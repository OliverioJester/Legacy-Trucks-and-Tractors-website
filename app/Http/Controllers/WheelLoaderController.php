<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WheelLoaderController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'weichai', 
                'name' => 'Wheel Loader', 
                'type' => 'Construction & Utility Vehicles', 
                'category'=> 'construction-utility-vehicles',
                'description' => 'The Wheel Loader WL880K-HST is a high-performance machine designed for heavy-duty tasks, featuring advanced hydraulic systems, powerful lifting capabilities, and exceptional stability, making it ideal for construction, mining, and other demanding applications.', 
                'image' => '/images/WheelLoader.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.weichai.wheelLoader',[
            'products' => $products
        ]);
    }
}
