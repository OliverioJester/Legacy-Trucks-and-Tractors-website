<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraderController extends Controller
{
    public function index()
    {
        $products =collect([
            [
                'brand' => 'weichai', 
                'name' => 'Grader', 
                'type' => 'Construction & Utility Vehicles', 
                'category'=> 'construction-utility-vehicles',
                'description' => 'The WG150 Motor Grader is a high-performance, versatile machine designed for precision grading, road maintenance, and construction projects, offering reliable power, advanced control, and durability for demanding tasks.', 
                'image' => '/images/Grader.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.weichai.grader',[
            'products' => $products
        ]);
    }
}
