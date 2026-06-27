<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OilFuelWaterTanker10CubicController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'sinotruk', 
                'name' => 'Oil Fuel Water Tanker 10 Cubic', 
                'type' => 'Tanker Trucks', 
                'category' => 'tanker-trucks', 
                'description' => 'The Sinotruk Oil, Fuel, and Water Tanker (10 Cubic) is a versatile and heavy-duty transport vehicle designed for efficient storage and distribution of liquids, featuring a 10,000-liter capacity tank, reliable pumping system, and durable chassis suited for fuel delivery, water supply, and various industrial applications.', 
                'image' => '/images/oil-fuel-water-tanker-10-cubic_1.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.sinotruk.oilFuelWaterTanker10Cubic',[
            'products' => $products
        ]);
    }
}
