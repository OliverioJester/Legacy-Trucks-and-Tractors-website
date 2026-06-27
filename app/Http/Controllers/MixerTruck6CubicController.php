<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MixerTruck6CubicController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'sinotruk', 
                'name' => 'Mixer Truck 6 Cubic', 
                'type' => 'Mixer Trucks', 
                'category' => 'mixer-trucks', 
                'description' => 'The Sinotruk 6 Cubic Meter Mixer Truck is a high-capacity, durable vehicle designed for efficient concrete transport and mixing, ensuring reliability and performance on construction sites of any scale.', 
                'image' => '/images/mixer-truck-6-cubic-1.png', 'link' => '#'],
        ]);
        return view('productSpecs.sinotruk.mixerTruck6Cubic',[
            'products' => $products
        ]);
    }
}
