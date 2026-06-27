<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcavatorController extends Controller
{
    public function index()
    {
        $products= collect([
            [
                'brand' => 'weichai', 
                'name' => 'Excavator', 
                'type' => 'Construction & Utility Vehicles', 
                'category'=> 'construction-utility-vehicles',
                'description' => 'The Weichai Excavator WE210E2 is a powerful and versatile machine, equipped with a fuel-efficient engine, advanced hydraulic system, and durable components, making it ideal for heavy-duty excavation and construction tasks', 
                'image' => '/images/Excavator.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.weichai.excavator',[
            'products' => $products
        ]);
    }
}
