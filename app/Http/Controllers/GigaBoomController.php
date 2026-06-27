<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GigaBoomController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Giga Boom', 
                'type' => 'CraneTrucks', 
                'category' => 'crane-trucks', 
                'description' => 'The Kingling Isuzu Giga Boom Red is a heavy-duty truck equipped with a hydraulic boom, designed for various lifting and transportation tasks. Maximize your operational efficiency with the Kingling Isuzu Giga Boom Red, the ideal solution for heavy-duty lifting and transportation needs.', 
                'image' => '/images/Giga_Boom_Red.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.gigaBoom',[
           'products' => $products
        ]);
    }
}
