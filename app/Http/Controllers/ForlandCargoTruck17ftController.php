<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForlandCargoTruck17ftController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland', 
                'name' => 'Forland Cargo Truck 17ft', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The Forland Cargo Truck 17ft is a medium-duty 4x2 truck designed for efficient cargo transport, featuring a 17-foot cargo bed suitable for a variety of goods. With a durable chassis, reliable engine, and versatile design, it provides strong performance, ease of loading, and dependability for urban and regional delivery operations.', 
                'image' => '/images/Forland-Cargo-Truck-17ft.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.forlandCargoTruck17ft',[
            'products' => $products
        ]);
    }
}
