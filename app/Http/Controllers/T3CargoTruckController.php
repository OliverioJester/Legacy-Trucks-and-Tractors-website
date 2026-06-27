<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class T3CargoTruckController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland', 
                'name' => 'T3 Cargo Truck', 
                'type' => 'Light Trucks', 
                'category' => 'light-trucks', 
                'description' => 'The Forland T3 Cargo Truck is a light-duty 4x2 truck designed for efficient urban and short-distance cargo transport. With a durable chassis, reliable engine, and versatile cargo bed, it offers dependable performance, easy maneuverability, and practicality for small businesses and delivery operations.', 
                'image' => '/images/Forland_T3_Cargo_Truck.png', '
                link' => '#'
            ],
        ]);
        return view('productSpecs.forland.T3CargoTruck',[
            'products' => $products
        ]);
    }
}
