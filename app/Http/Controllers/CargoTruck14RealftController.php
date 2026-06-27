<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargoTruck14RealftController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland',
                'name' => 'Cargo Truck 14 Realft', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The Forland Cargo Truck 14 Realft is a powerful 14-foot cargo truck designed for heavy-duty hauling, featuring a robust build and ample cargo space. Experience unmatched power and versatility with the Forland Cargo Truck 14 Realft, the ultimate solution for your business needs.', 
                'image' => '/images/Forland-Cargo-Truck-14-Realft.png', 'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.cargoTruck14Realft',[
            'products' => $products
        ]);
    }
}
