<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Isuzu6WGarbageController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Isuzu 6W Garbage', 
                'type' => 'Garbage & Waste Management Trucks', 
                'category' => 'garbage-waste-management-trucks', 
                'description' => 'The Kingling Isuzu 6W Garbage Truck is a heavy-duty vehicle designed for efficient waste collection and transportation, featuring a robust build and advanced compaction technology. Optimize your waste management operations with the Kingling Isuzu 6W Garbage Truck, the ideal solution for efficient and hygienic waste disposal.', 
                'image' => '/images/Isuzu_6W_Garbage.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.isuzu6WGarbage',[
            'products' => $products
        ]);
    }
}
