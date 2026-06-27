<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Powerquip155850KVAController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'powerquip', 
                'name' => '15-5850 KVA', 
                'type' => 'Power Generators', 
                'category'=>'power-generators', 
                'description' => 'The Powerquip generator provides a comprehensive range of diesel generator sets with power outputs from 15 to 5850 kVA, designed for diverse power needs and delivering reliable performance. Power your projects with Weichai Powergen, offering a wide range of diesel generators from 15 to 5850 kVA for reliable and efficient power solutions.', 
                'image' => '/images/PowerQuipGenerators.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.powerquip.155850kva',[
            'products' => $products
        ]);
    }
}
