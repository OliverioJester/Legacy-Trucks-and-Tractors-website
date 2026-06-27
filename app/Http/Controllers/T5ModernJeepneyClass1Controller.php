<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class T5ModernJeepneyClass1Controller extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'forland', 
                'name' => 'T5 Modern Jeepney Class 1', 
                'type' => 'Passenger Transport', 
                'category' => 'passenger-transport', 
                'description' => 'The Forland T5 Modern Jeepney Class 1 is a light- to medium-duty public transport vehicle designed for urban commuting, featuring a durable chassis and a reliable engine for daily operation. As an upgraded version of the traditional jeepney, it offers a modern body design, improved fuel efficiency, and a passenger-friendly layout, providing comfort, safety, and dependable performance for both operators and commuters.', 
                'image' => '/images/T5_Mordern_Jeepney_Class_1.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.forland.T5MordernJeepneyClass1',[
            'products' => $products
        ]);
    }
}
