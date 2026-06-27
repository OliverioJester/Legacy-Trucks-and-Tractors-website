<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShacmanTractorheadH3000Controller extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'shacman', 
                'name' => 'Shacman Tractorhead H3000', 
                'type' => 'Tractor Head Trucks', 
                'category'=>'tractor-head-trucks', 
                'description' => 'The Shacman H3000 Tractor Head is a heavy-duty tractor unit designed for long-haul transportation, offering robust performance and fuel efficiency. Maximize your long-haul logistics operations with the Shacman H3000 Tractor Head, the ideal solution for reliable and efficient freight transport.', 
                'image' => '/images/TractorheadH3000.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.shacman.shacmanTractorheadH3000',[
            'products' => $products
        ]);
    }
}
