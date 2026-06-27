<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NKR600PController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'NKR 600P', 
                'type' => 'Light Trucks', 
                'category' => 'light-trucks', 
                'description' => 'The Kingling Isuzu NKR 600P is a light-duty 4x2 truck designed for efficient urban transport, offering a compact yet durable chassis paired with a fuel-efficient diesel engine. Built for flexibility and practicality, it is ideal for delivery, cargo, and various light commercial applications where maneuverability and reliability are essential.', 
                'image' => '/images/NKR_600p.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.nkr600P',[
            'products' => $products
        ]);
    }
}
