<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DumpTruck6cbmController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Dump Truck 6cbm', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The Forland Dump Truck 6 CBM is a heavy-duty vehicle designed for construction and material transport, featuring a 6-cubic-meter dump body for efficient hauling of sand, gravel, and other bulk materials. Its robust chassis, reliable engine, and hydraulic dumping system ensure durability, strong performance, and ease of operation on construction sites and challenging terrains.', 
                'image' => '/images/Dump_Truck_6cbm.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.dumpTruck6Cbm',[
            'products' => $products
        ]);
    }
}
