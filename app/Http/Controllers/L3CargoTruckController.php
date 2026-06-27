<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class L3CargoTruckController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland', 
                'name' => 'L3 Cargo Truck', 
                'type' => 'Light Trucks', 
                'category' => 'light-trucks', 
                'description' => 'The Forland L3 Cargo Truck is a light- to medium-duty 4x2 truck designed for efficient urban and regional cargo transport. Featuring a durable chassis, reliable engine, and versatile cargo bed, it provides strong performance, ease of loading, and dependability for delivery, logistics, and various commercial applications.', 
                'image' => '/images/Forland-L3-Cargo-truck.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.L3CargoTruck',[
            'products' => $products
        ]);
    }
}
