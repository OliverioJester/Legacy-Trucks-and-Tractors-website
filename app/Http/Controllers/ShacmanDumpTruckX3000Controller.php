<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShacmanDumpTruckX3000Controller extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'shacman', 
                'name' => 'Shacman Dump Truck X3000', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The Shacman X3000 Dump Truck is a heavy-duty vehicle designed for efficient material transportation, offering a robust build, advanced technology, and superior performance. Maximize your construction site efficiency with the Shacman X3000 Dump Truck, the ideal solution for heavy-duty hauling and material transport.', 
                'image' => '/images/Shacman_Dump_Truck_X3000.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.shacman.shacmanDumpTruckX3000',[
            'products' => $products
        ]);
    }
}
