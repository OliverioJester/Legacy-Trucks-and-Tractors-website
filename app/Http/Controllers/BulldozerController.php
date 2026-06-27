<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BulldozerController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'weichai',
                'name' => 'Bulldozer',
                'type' => 'Construction & Utility Vehicles',
                'category'=> 'construction-utility-vehicles',
                'description' => 'The Bulldozer WSD320 is a high-performance, heavy-duty machine designed for large-scale earthmoving and construction projects, offering robust power, durability, and advanced control features to handle the toughest terrains and tasks efficiently.',
                'image' => '/images/Bulldozer.png',
                'link' => '#'
            ],
        ]);
        return view('productSpecs.weichai.bulldozer',[
           'products' => $products
        ]);
    }
}
