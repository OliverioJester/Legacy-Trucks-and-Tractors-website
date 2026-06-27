<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FTRController extends Controller
{
    public function index()
    {
        $produts = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'FTR', 
                'type' => 'Medium Trucks', 
                'category' => 'medium-duty', 
                'description' => 'The Kingling Isuzu FTR is a versatile medium-duty 4×2 truck designed for efficient urban and regional transport. It offers reliable performance, fuel efficiency, and a durable build, making it well-suited for delivery, cargo hauling, and a wide range of commercial applications. With its balance of power and practicality, it is an ideal choice for businesses looking for a dependable and cost-effective transport solution.', 
                'image' => '/images/FTR.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.ftr',[
            'products' => $produts
        ]);
    }
}
