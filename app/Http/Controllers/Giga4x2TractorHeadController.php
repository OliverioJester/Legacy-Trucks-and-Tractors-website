<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Giga4x2TractorHeadController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Giga 4x2 Tractor Head', 
                'type' => 'Tractor Head Trucks', 
                'category'=>'tractor-head-trucks', 
                'description' => 'The Kingling Isuzu GIGA 4x2 Tractor Head is a heavy-duty prime mover designed to efficiently haul trailers over long distances, combining a powerful engine with a durable, reinforced chassis. Built for demanding commercial transport, it delivers reliability, fuel efficiency, and versatility, making it an ideal choice for logistics and heavy cargo operations.', 
                'image' => '/images/Giga_4x2_Tractor.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.giga4x2TractorHead',[
            'products' => $products
        ]);
    }
}
