<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class L7CargoTruckController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland', 
                'name' => 'L7 Cargo Truck', 
                'type' => 'Light Trucks', 
                'category' => 'light-trucks', 
                'description' => 'The Forland L7 Cargo Truck is a medium- to heavy-duty 4x2 truck designed for efficient and reliable cargo transport, featuring a reinforced chassis and a powerful engine capable of handling larger loads. Its spacious cargo bed, durability, and strong performance make it ideal for commercial logistics, regional deliveries, and various industrial applications.', 
                'image' => '/images/Forland-L7-Cargo-Truck.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.L7CargoTruck',[
            'products' => $products
        ]);
    }
}
