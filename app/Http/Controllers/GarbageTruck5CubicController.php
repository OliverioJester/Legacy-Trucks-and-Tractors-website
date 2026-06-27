<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GarbageTruck5CubicController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'sinotruk', 
                'name' => 'Garbage Truck 5 Cubic', 
                'type' => 'Garbage & Waste Management Trucks', 
                'category' => 'garbage-waste-management-trucks', 
                'description' => 'The Sinotruck 5 Cubic Garbage Truck is a durable and efficient waste management solution, ideal for urban and commercial use. Its compact design allows for easy maneuverability in tight spaces, while the sturdy build ensures reliable performance. Equipped with an optimized hydraulic system, it provides smooth and hassle-free operation, making waste collection more efficient and convenient.', 
                'image' => '/images/garbage-truck-5-cubic.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.sinotruk.garbageTruck5Cubic',[
            'products' => $products
        ]);
    }
}
