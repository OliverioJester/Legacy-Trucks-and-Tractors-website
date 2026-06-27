<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DumpTruck12CubicController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'sinotruk', 
                'name' => 'Dump Truck 12 Cubic', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The Sinotruk 12-Cubic Meter Dump Truck is a heavy-duty vehicle designed for efficient material transportation, offering a robust build and reliable performance. Maximize your construction site efficiency with the Sinotruk 12-Cubic Meter Dump Truck, the ideal solution for large-scale hauling and material transport.', 
                'image' => '/images/dump-truck-12-cubic.png', 
                'link' => '#'],
        ]);
        return view('productSpecs.sinotruk.dumpTruck12Cubic',[
            'products' => $products
        ]);
    }
}
