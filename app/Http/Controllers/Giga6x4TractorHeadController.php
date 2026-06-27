<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Giga6x4TractorHeadController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Giga 6x4 Tractor Head', 
                'type' => 'Tractor Head Trucks', 
                'category'=>'tractor-head-trucks', 
                'description' => 'The Kingling Isuzu GIGA 6x4 Tractor Head is a heavy-duty prime mover with a 6x4 axle configuration that provides excellent traction and load-carrying capability, making it well-suited for hauling larger and heavier trailers. With a robust engine and reinforced chassis, it delivers reliable performance, stability, and durability for demanding logistics and long-distance transport applications.', 
                'image' => '/images/Giga_6x4_Tractor_Head.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.giga6x4Tractorhead',[
            'products' => $products
        ]);
    }
}
