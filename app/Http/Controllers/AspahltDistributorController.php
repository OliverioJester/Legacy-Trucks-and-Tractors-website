<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AspahltDistributorController extends Controller
{
    public function index()
    {
    $products = collect([
                [
                    'brand' => 'kingling-isuzu', 
                    'name' => 'Aspahlt Distributor', 
                    'type' => 'Construction & Utility Vehicles', 
                    'category'=> 'construction-utility-vehicles',
                    'description' => 'The Kingling Isuzu Asphalt Distributor is a specialized vehicle designed for efficient asphalt application, featuring precise control and advanced heating systems. Optimize your road construction projects with the Kingling Isuzu Asphalt Distributor, the ideal solution for high-quality and efficient asphalt application.', 
                    'image' => '/images/Aspahlt-Distributor.png', 
                    'link' => '#'
                ],
    ]); 
        return view('productSpecs.kinglingIsuzu.aspahltDistributor',[
            'products' => $products
        ]);
    }
}
