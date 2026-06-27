<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Giga6x2CargoHeadController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Giga 6x2 Cargo Head', 
                'type' => 'Heavy Trucks', 
                'category' => 'heavy-trucks', 
                'description' => 'The Kingling Isuzu GIGA 6x2 Cargo Head is a heavy-duty prime mover with a 6x2 axle configuration that provides enhanced stability and load handling compared to a 4x2 tractor, making it well-suited for hauling heavier trailers over long distances. Its robust engine, reinforced chassis, and optimized design deliver reliable performance and efficiency for demanding logistics and transportation applications.', 
                'image' => '/images/Giga_6x2_Cargo_Head.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.giga6x2Cargohead',[
            'products' => $products
        ]);
    }
}
