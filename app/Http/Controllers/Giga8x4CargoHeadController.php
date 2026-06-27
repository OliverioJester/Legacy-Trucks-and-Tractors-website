<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Giga8x4CargoHeadController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Giga 8x4 Cargo Head', 
                'type' => 'Heavy Trucks', 
                'category' => 'heavy-trucks', 
                'description' => 'The Kingling Isuzu GIGA 8x4 Cargo Head is a heavy-duty truck configured as a prime mover with an 8x4 axle setup, offering exceptional stability and load capacity for hauling large trailers in demanding transport conditions. Its powerful engine and reinforced chassis deliver strong performance and durability, making it suitable for heavy cargo operations and long-distance logistics.', 
                'image' => '/images/Giga_8x4_Cargo_Head.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.giga8x4CargoHead',[
            'products' => $products
        ]);
    }
}
