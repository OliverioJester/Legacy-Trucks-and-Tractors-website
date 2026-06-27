<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShacmanWingVanController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'shacman', 
                'name' => 'Shacman Wing Van', 
                'type' => 'Heavy Trucks', 
                'category' => 'heavy-trucks', 
                'description' => 'The Shacman Wing Van is a heavy-duty vehicle designed for efficient transportation of various goods, offering a spacious cargo area and reliable performance. Optimize your cargo transportation needs with the Shacman Wing Van, the ideal solution for efficient and secure delivery.', 
                'image' => '/images/shacman_wing_van.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.shacman.shacmanWingVan',[
            'products' => $products
        ]);
    }
}
