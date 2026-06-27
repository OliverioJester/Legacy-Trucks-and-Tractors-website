<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShacmanFuelTankerController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'shacman', 
                'name' => 'Shacman Fuel Tanker', 
                'type' => 'Tanker Trucks', 
                'category' => 'tanker-trucks', 
                'description' => 'The Shacman Fuel Tanker is a heavy-duty vehicle designed for safe and efficient transportation of various liquids, including fuel and oil.', 
                'image' => '/images/shacman_fuel_tanker.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.shacman.shacmanFuelTanker',[
            'products' => $products
        ]);
    }
}
