<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GigaMixerTruck10W10CBMController extends Controller
{
    public function index()
    {
        $products = collect([
            [
                'brand' => 'kingling-isuzu', 
                'name' => 'Giga Mixer Truck 10W 10CBM', 
                'type' => 'Mixer Trucks', 
                'category' => 'mixer-trucks', 
                'description' => 'The Kingling Isuzu GIGA Mixer Truck 10W 10CBM is a heavy-duty concrete mixer built on a robust 10-wheeler chassis with a 10 cubic-meter drum capacity, designed for high-volume concrete delivery on construction sites. Its powerful engine, reinforced frame, and large-capacity mixer ensure reliable performance, stability, and efficiency for demanding heavy-construction applications.', 
                'image' => '/images/Giga_Mixer_Truck_10W10CBM.png', 
                'link' => '#'
            ],
        ]);
        return view('productSpecs.kinglingIsuzu.gigaMixerTruck10W10Cbm',[
            'products' => $products
        ]);
    }
}
