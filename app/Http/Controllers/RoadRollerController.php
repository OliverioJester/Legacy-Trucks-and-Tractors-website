<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoadRollerController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'weichai', 
                'name' => 'Road-Roller', 
                'type' => 'Construction & Utility Vehicles', 
                'category'=> 'construction-utility-vehicles',
                'description' => 'The Weichai Road-Roller WR22H-C6 is a robust and efficient machine designed for optimal compaction performance, featuring advanced hydraulics, durable construction, and exceptional maneuverability to tackle heavy-duty roadwork with ease.', 
                'image' => '/images/RoadRoller.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.weichai.roadRoller',[
            'products' => $products
        ]);
    }
}
