<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargoTruck20ftController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland', 
                'name' => 'Cargo Truck 20ft', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The Forland Cargo Truck 20ft is a robust 20-foot cargo truck, designed to handle heavy-duty loads with ease. Elevate your hauling capabilities with the Forland Cargo Truck 20ft, the ultimate choice for demanding transportation needs.', 
                'image' => '/images/Forland-Cargo-Truck-20ft.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.cargoTruck20ft',[
            'products' => $products
        ]);
    }
}
