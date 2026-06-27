<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Giga6x4CargoHeadController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Giga 6x4 Cargo Head', 
                'type' => 'Heavy Trucks', 
                'category' => 'heavy-trucks', 
                'description' => 'The Kingling Isuzu GIGA 6x4 Cargo Head is a heavy-duty tractor unit with a 6x4 axle configuration that offers superior traction and load-bearing capability, making it ideal for hauling heavy trailers in tough conditions. Its powerful engine and reinforced chassis deliver reliable performance, stability, and durability for demanding long-distance and high-capacity transport operations.', 
                'image' => '/images/Giga_6x4_Cargo_Head_Blue.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.giga6x4Cargohead',[
            'products' => $products
        ]);
    }
}
