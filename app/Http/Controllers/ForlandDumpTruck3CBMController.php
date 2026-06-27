<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForlandDumpTruck3CBMController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland', 
                'name' => 'Forland Dump Truck 3CBM', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The Forland Dump Truck 3CBM is a light to medium-duty truck designed for transporting and unloading materials such as sand, gravel, and construction debris, featuring a 3-cubic-meter dump body. Its compact chassis, reliable engine, and hydraulic dumping system make it ideal for construction sites, landscaping, and urban material transport where maneuverability and efficiency are important.', 
                'image' => '/images/Forland-Dump-Truck-3CBM.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.forlandDumpTruck3Cbm',[
            'products' => $products
        ]);
    }
}
