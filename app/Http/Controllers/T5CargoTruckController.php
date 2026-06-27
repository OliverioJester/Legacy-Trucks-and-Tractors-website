<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class T5CargoTruckController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland', 
                'name' => 'T5 Cargo Truck', 
                'type' => 'Light Trucks', 
                'category' => 'light-trucks', 
                'description' => 'The Forland T5 Cargo Truck is a medium-duty 4×2 truck designed for reliable cargo transport, featuring a durable chassis and a fuel-efficient engine suitable for urban and regional deliveries. Its spacious cargo bed, strong load capacity, and dependable performance make it ideal for logistics, commercial transport, and various business applications.', 
                'image' => '/images/Forland_T5_Cargo_Truck.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.T5CargoTruck',[
            'products' => $products
        ]);
    }
}
