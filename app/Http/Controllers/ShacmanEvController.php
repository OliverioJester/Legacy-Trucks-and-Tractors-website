<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShacmanEvController extends Controller
{
    public function index()
    {
        $products = collect([
            ['brand' => 'shacman', 
            'name' => 'EV Shacman', 
            'type' => 'Electric Vehicle', 
            'category' => 'electric-vehicle', 
            'description' => 'The EV Shacman truck is a robust electric-powered commercial vehicle, offering sustainable and efficient transportation solutions with advanced technology for heavy-duty hauling and long-distance operations.', 
            'image' => '/images/EvShacman.png', 
            'link' => '#'
            ],
        ]);
        return view('productSpecs.shacman.shacmanEv',[
            'products' => $products
        ]);
    }
}
