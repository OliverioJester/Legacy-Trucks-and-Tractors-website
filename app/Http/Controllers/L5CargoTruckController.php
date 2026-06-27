<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class L5CargoTruckController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland', 
                'name' => 'L5 Cargo Truck', 
                'type' => 'Light Trucks', 
                'category' => 'light-trucks', 
                'description' => 'The Forland L5 Cargo Truck is a medium-duty 4x2 truck designed for reliable cargo transport, featuring a robust chassis and a fuel-efficient engine suitable for urban and regional delivery. With its spacious cargo bed, strong load capacity, and dependable performance, it is ideal for logistics, commercial transport, and various business applications.', 
                'image' => '/images/L5.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.L5CargoTruck',[
            'products' => $products
        ]);
    }
}
