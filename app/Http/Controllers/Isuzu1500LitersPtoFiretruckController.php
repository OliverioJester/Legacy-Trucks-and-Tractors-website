<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Isuzu1500LitersPtoFiretruckController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Isuzu NLR 4 Wheeler 1500Liters PTO Firetruck', 
                'type' => 'Emergency & Special Purpose Vehicles', 
                'category' => 'emergency-special-purpose-vehicles', 
                'description' => 'The Kingling Isuzu NLR 4 Wheeler Firetruck is a light-duty vehicle equipped with a water tank and firefighting equipment, designed for quick response to small-scale fires. Protect your community with the Kingling Isuzu NLR 4 Wheeler Firetruck, a reliable and efficient firefighting solution for urban areas.', 
                'image' => '/images/Isuzu-NLR-4-Wheeler-1500-Liters-PTO-Fire-Truck.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.1500litersPtoFiretruck',[
            'products' => $products
        ]);
    }
}
