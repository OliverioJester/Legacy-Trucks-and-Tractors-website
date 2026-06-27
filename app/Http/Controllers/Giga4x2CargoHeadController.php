<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Giga4x2CargoHeadController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Giga 4x2 Cargo Head', 
                'type' => 'Heavy Trucks', 
                'category' => 'heavy-trucks', 
                'description' => 'The Kingling Isuzu Giga 4x2 Cargo Head is a heavy-duty tractor unit designed for long-haul transportation, offering robust performance and fuel efficiency. Maximize your long-haul logistics operations with the Kingling Isuzu Giga 4x2 Cargo Head, the ideal solution for reliable and efficient freight transport.', 
                'image' => '/images/Giga_4x2_Cargo_Head_Red.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.giga4x2CargoHead',[
            'products' => $products
        ]);
    }
}
