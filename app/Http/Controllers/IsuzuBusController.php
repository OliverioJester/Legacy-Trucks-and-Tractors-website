<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsuzuBusController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Isuzu Bus ', 
                'type' => 'Passenger Transport', 
                'category' => 'passenger-transport', 
                'description' => 'The Kingling Isuzu Bus is a versatile bus designed for efficient passenger transportation, offering a comfortable ride and durable performance. Elevate your passenger transportation experience with the Kingling Isuzu Bus, the ideal solution for reliable and comfortable journeys.', 
                'image' => '/images/Isuzu_Bus.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.isuzuBus',[
            'products' => $products
        ]);
    }
}
