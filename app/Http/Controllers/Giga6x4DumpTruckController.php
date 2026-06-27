<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Giga6x4DumpTruckController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Giga 6x4 Dump Truck', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The Kingling Isuzu Giga 6x4 Dump Truck is a heavy-duty vehicle designed for efficient material transportation, offering a robust build and reliable performance. Maximize your construction site efficiency with the Kingling Isuzu Giga 6x4 Dump Truck, the ideal solution for heavy-duty hauling and material transport.', 
                'image' => '/images/Giga_6x4_Dump_Truck.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.giga6x4DumpTruck',[
            'products' => $products
        ]);
    }
}
