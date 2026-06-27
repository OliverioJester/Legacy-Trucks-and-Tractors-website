<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargoTruck6WheelerController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'sinotruk', 
                'name' => 'Cargo Truck 6 Wheeler', 
                'type' => 'Light Trucks', 
                'category' => 'light-trucks', 
                'description' => 'The Cargo Truck 6 Wheeler Truck is a heavy-duty vehicle designed for efficient transportation of large loads, offering a balance of power, durability, and payload capacity. Maximize your heavy-duty hauling capabilities with the Sinotruk Cargo Truck 6 Wheeler Truck, the ideal solution for demanding transportation needs.', 
                'image' => '/images/cargo-truck-6-wheeler-1.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.sinotruk.cargoTruck6Wheeler',[
            'products' => $products
        ]);
    }
}
