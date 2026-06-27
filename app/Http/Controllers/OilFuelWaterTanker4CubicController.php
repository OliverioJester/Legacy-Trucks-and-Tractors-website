<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OilFuelWaterTanker4CubicController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'sinotruk', 
                'name' => 'Oil Fuel Water Tanker 4 Cubic', 
                'type' => 'Tanker Trucks', 
                'category' => 'tanker-trucks', 
                'description' => 'The Sinotruk 4 Cubic Meter Oil Fuel Water Tanker is a heavy-duty vehicle designed for safe and efficient transportation of various liquids, including oil, fuel, and water. Optimize your liquid transportation needs with the Sinotruk 4 Cubic Meter Oil Fuel Water Tanker, a reliable and durable solution for efficient delivery.', 
                'image' => '/images/oil-fuel-water-tanker-4-cubic.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.sinotruk.oilFuelWaterTanker4Cubic',[
            'products' => $products
        ]);
    }
}
