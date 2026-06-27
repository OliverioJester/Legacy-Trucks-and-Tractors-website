<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForkliftController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'weichai', 
                'name' => 'Forklift', 
                'type' => 'Construction & Utility Vehicles', 
                'category'=> 'construction-utility-vehicles',
                'description' => 'The Weichai Forklift WF25D is a reliable and robust material handling machine, designed to deliver powerful performance and exceptional maneuverability in demanding industrial environments, equipped with advanced features for enhanced efficiency and operator comfort.', 
                'image' => '/images/ForkLift.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.weichai.forklift',[
            'products' => $products
        ]);
    }
}
