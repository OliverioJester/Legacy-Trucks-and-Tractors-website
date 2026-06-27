<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Powergen182750KVAController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'weichai-powergen', 
                'name' => '18-2750 KVA', 
                'type' => 'Power Generators', 
                'category'=>'power-generators', 
                'description' => 'The powergen 18-2750 KVA generator is a reliable and efficient power generator designed to deliver consistent electrical output, equipped with a robust engine and advanced technology, making it suitable for a wide range of industrial and commercial applications.', 
                'image' => '/images/WeichaiPowerGenerators.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.powergen.182750kva',[
            'products' => $products
        ]);
    }
}
