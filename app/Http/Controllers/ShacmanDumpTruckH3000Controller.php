<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShacmanDumpTruckH3000Controller extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'shacman', 
                'name' => 'Shacman Dump Truck H3000', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The Shacman H3000 Dump Truck is a heavy-duty vehicle designed for efficient material transportation, offering a robust build and reliable performance. Maximize your construction site efficiency with the Shacman H3000 Dump Truck, the ideal solution for heavy-duty hauling and material transport.', 
                'image' => '/images/Shacman_Dump_Truck_H3000.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.shacman.shacmanDumpTruckH3000',[
            'products' => $products
        ]);
    }
}
