<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GTH6x4_300HPController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'GTH 6x4 300HP', 
                'type' => 'Tractor Head Trucks', 
                'category'=>'tractor-head-trucks', 
                'description' => 'The Kingling Isuzu GTH 6x4 300HP is a heavy-duty truck built on a 6x4 chassis, equipped with a powerful 300-horsepower engine designed to handle demanding transport and hauling operations. With its strong engine output, durable construction, and high load capacity, it is well-suited for heavy cargo, construction, and long-distance logistics applications.', 
                'image' => '/images/GTH_6x4_300HP.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.Gth6x4_300Hp', [
            'products' => $products
        ]);
    }
}
