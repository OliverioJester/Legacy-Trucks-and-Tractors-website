<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Isuzu6000LitersPtoFiretruckController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Kingling Isuzu FVR 6 Wheeler 6000Liters PTO Firetruck', 
                'type' => 'Emergency & Special Purpose Vehicles', 
                'category' => 'emergency-special-purpose-vehicles', 
                'description' => 'The Kingling Isuzu FVR 6 Wheeler Firetruck is a heavy-duty vehicle equipped with a high-capacity water tank and advanced firefighting equipment, designed to tackle large-scale fires. Protect your community with the Kingling Isuzu FVR 6 Wheeler Firetruck, a reliable and powerful firefighting solution.', 
                'image' => '/images/Isuzu-FVR-6-Wheeler-6000-Liters-PTO-Fire-Truck.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.600litersPtoFiretruck',[
            'products' => $products
        ]);
    }
}
