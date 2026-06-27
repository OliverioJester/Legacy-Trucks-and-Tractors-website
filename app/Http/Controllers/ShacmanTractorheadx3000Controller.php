<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShacmanTractorheadx3000Controller extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'shacman', 
                'name' => 'Shacman Tractorhead X3000', 
                'type' => 'Tractor Head Trucks', 
                'category'=>'tractor-head-trucks', 
                'description' => 'The Shacman X3000 Tractor Head is a heavy-duty tractor unit designed for long-haul transportation, offering robust performance, advanced technology, and superior fuel efficiency. Maximize your long-haul logistics operations with the Shacman X3000 Tractor Head, the ideal solution for reliable and efficient freight transport. Sources and related content.', 
                'image' => '/images/TractorheadX3000.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.shacman.shacmanTractorheadX3000',[
            'products' => $products
        ]);
    }
}
