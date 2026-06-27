<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Isuzu700PffrController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Isuzu 700 PFFR', 
                'type' => 'Medium Trucks', 
                'category' => 'medium-trucks', 
                'description' => 'The Kingling Isuzu 700P FFR is a reliable medium-duty 4x2 truck designed for efficient cargo transport, featuring a durable chassis and a fuel-efficient engine suited for urban and regional operations. Built for versatility and practicality, it offers strong load capacity and dependable performance, making it ideal for delivery, logistics, and various commercial applications.', 
                'image' => '/images/Kingling_700P_FFR_Medium_Duty_Truck.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.isuzu700Pffr',[
            'products' => $products
        ]);
    }
}
