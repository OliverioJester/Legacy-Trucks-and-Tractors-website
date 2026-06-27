<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NPR700PController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'NPR 700P', 
                'type' => 'Light Trucks', 
                'category' => 'light-trucks', 
                'description' => 'The Kingling Isuzu NKR 700P is a medium-duty 4x2 truck designed for efficient cargo transport, featuring a durable chassis and a powerful yet fuel-efficient diesel engine suitable for both urban and regional operations. With its strong load capacity, reliable performance, and versatile body configurations, it is ideal for delivery, logistics, and various commercial applications.', 
                'image' => '/images/NPR_700P.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.npr700P',[
            'products' => $products
        ]);
    }
}
