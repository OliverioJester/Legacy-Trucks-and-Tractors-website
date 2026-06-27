<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShacmanMixerController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'shacman', 
                'name' => 'Shacman Mixer', 
                'type' => 'Mixer Trucks', 
                'category' => 'mixer-trucks', 
                'description' => 'The Shacman Mixer Truck is a heavy-duty vehicle designed for efficient concrete mixing and transportation, featuring a robust build and advanced mixing technology. Optimize your construction projects with the Shacman Mixer Truck, the ideal solution for reliable and efficient concrete delivery.', 
                'image' => '/images/ShacmanMixer.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.shacman.shacmanMixer',[
            'products' => $products
        ]);
    }
}
