<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsuzuSewageController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Kingling Isuzu Sewage', 
                'type' => 'Garbage & Waste Management Trucks', 
                'category' => 'garbage-waste-management-trucks', 
                'description' => 'The Kingling Isuzu Sewage Truck is a specialized heavy-duty vehicle designed for sanitation and waste management, equipped with a high-powered vacuum pump and sealed tank for collecting and transporting sewage, sludge, and liquid waste. Built for efficiency and environmental safety, it is widely used in municipal services, construction sites, and industrial operations to maintain clean and functional drainage systems.', 
                'image' => '/images/Isuzu_Sewage.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.isuzuSewage',[
            'products' => $products
        ]);
    }
}
