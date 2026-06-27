<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MixerTruck4CubicController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'sinotruk', 
                'name' => 'Mixer Truck 4 Cubic', 
                'type' => 'Mixer Trucks', 
                'category' => 'mixer-trucks', 
                'description' => 'The Sinotruk 4 Cubic Meter Mixer Truck is a heavy-duty vehicle designed for efficient concrete mixing and transportation, featuring a robust build and advanced mixing technology. Optimize your construction projects with the Sinotruk 4 Cubic Meter Mixer Truck, the ideal solution for reliable and efficient concrete delivery.', 
                'image' => '/images/mixer-truck-4-cubic.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.sinotruk.mixerTruck4Cubic',[
            'products' => $products
        ]);
    }
}
