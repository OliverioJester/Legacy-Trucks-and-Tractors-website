<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForlandT5_4x2DumpTruckController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland', 
                'name' => 'Forland T5 4x2 Dump Truck', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The Forland T5 4x2 Dump Truck is a medium-duty vehicle designed for efficient hauling and dumping of materials such as sand, gravel, and construction debris. Equipped with a durable chassis, reliable engine, and hydraulic dump system, it offers strong performance, maneuverability, and dependability for construction sites and urban material transport.', 
                'image' => '/images/Forland_T5_4x2_Dump_Truck.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.forlandT5_4x2DumpTruck',[
            'products' => $products
        ]);
    }
}
