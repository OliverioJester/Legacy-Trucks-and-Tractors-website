<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FVRController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'FVR', 
                'type' => 'Medium Trucks', 
                'category' => 'medium-trucks', 
                'description' => 'The Kingling Isuzu FVR is a dependable medium-duty 4x2 truck engineered for efficient and reliable cargo transport, featuring a durable chassis, fuel-efficient engine, and a versatile design that can be customized for various applications such as dropside, van, or utility body, making it an ideal choice for businesses seeking performance, durability, and long-term value.', 
                'image' => '/images/FVR.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.fvr',[
            'products' => $products
        ]);
    }
}
