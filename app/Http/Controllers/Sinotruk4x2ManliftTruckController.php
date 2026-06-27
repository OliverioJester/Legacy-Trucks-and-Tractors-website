<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sinotruk4x2ManliftTruckController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'sinotruk', 
                'name' => '4x2 Manlift Truck', 
                'type' => 'Dump Trucks', 
                'category'=>'dump-trucks', 
                'description' => 'The 4x2 Manlift Truck is a heavy-duty vehicle equipped with a hydraulic platform, designed to elevate workers and equipment to significant heights for maintenance, construction, and other aerial work. Maximize your productivity and safety with the 4x2 Manlift Truck, the ideal solution for efficient and reliable aerial work.', 
                'image' => '/images/manlift-truck-4x2.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.sinotruk.4x2ManliftTruck',[
            'products' => $products
        ]);
    }
}
