<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sinotruk4CubicMeterDumpTruckController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'sinotruk', 
                'name' => '4-Cubic Meter Dump Truck', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The Sinotruk 4-Cubic Meter Dump Truck is a medium-duty vehicle designed for efficient material transportation, offering a robust build and reliable performance. Optimize your construction site efficiency with the Sinotruk 4-Cubic Meter Dump Truck, the ideal solution for heavy-duty hauling and material transport.', 
                'image' => '/images/dump-truck-4-cubic.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.sinotruk.4cubicMeterDumpTruck',[
            'products' => $products
        ]);
    }
}
