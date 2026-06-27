<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class AllProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $products = collect([
            // Weichai Heavy Equipment
            ['brand' => 'weichai', 'name' => 'Excavator', 'type' => 'Construction & Utility Vehicles', 'category'=> 'construction-utility-vehicles','description' => '', 'image' => '/images/Excavator.png', 'link' => '/excavator'],
            ['brand' => 'weichai', 'name' => 'Road-Roller', 'type' => 'Construction & Utility Vehicles', 'category'=> 'construction-utility-vehicles','description' => '', 'image' => '/images/RoadRoller.png', 'link' => '/road-roller'],
            ['brand' => 'weichai', 'name' => 'Forklift', 'type' => 'Construction & Utility Vehicles', 'category'=> 'construction-utility-vehicles','description' => '', 'image' => '/images/ForkLift.png', 'link' => '/forklift'],
            ['brand' => 'weichai', 'name' => 'Grader', 'type' => 'Construction & Utility Vehicles', 'category'=> 'construction-utility-vehicles','description' => '', 'image' => '/images/Grader.png', 'link' => '/grader'],
            ['brand' => 'weichai', 'name' => 'Wheel-loader', 'type' => 'Construction & Utility Vehicles', 'category'=> 'construction-utility-vehicles','description' => '', 'image' => '/images/WheelLoader.png', 'link' => '/wheel-loader'],
            ['brand' => 'weichai', 'name' => 'Bulldozer', 'type' => 'Construction & Utility Vehicles', 'category'=> 'construction-utility-vehicles','description' => '', 'image' => '/images/Bulldozer.png', 'link' => '/bulldozer'],
            // Weichai and Powergen Generator
            ['brand' => 'powerquip', 'name' => '15-5850 KVA', 'type' => 'Power Generators', 'category'=>'power-generators', 'description' => '', 'image' => '/images/PowerQuipGenerators.png', 'link' => '/powerquip-15-5850-kva'],
            ['brand' => 'weichai-powergen', 'name' => '18-2750 KVA', 'type' => 'Power Generators', 'category'=>'power-generators', 'description' => '', 'image' => '/images/WeichaiPowerGenerators.png', 'link' => '/powergen-18-2750-kva'],
            // Shacman
            ['brand' => 'shacman', 'name' => 'Shacman Tractorhead X3000', 'type' => 'Tractor Head Trucks', 'category'=>'tractor-head-trucks', 'description' => '', 'image' => '/images/TractorheadX3000.png', 'link' => '/shacman-tractorhead-x3000'],
            ['brand' => 'shacman', 'name' => 'Shacman Tractorhead H3000', 'type' => 'Tractor Head Trucks', 'category'=>'tractor-head-trucks', 'description' => '', 'image' => '/images/TractorheadH3000.png', 'link' => '/shacman-tractorhead-h3000'],
            ['brand' => 'shacman', 'name' => 'Shacman Mixer', 'type' => 'Mixer Trucks', 'category' => 'mixer-trucks', 'description' => '', 'image' => '/images/ShacmanMixer.png', 'link' => '/shacman-mixer'],
            ['brand' => 'shacman', 'name' => 'EV Shacman', 'type' => 'Electric Vehicle', 'category' => 'electric-vehicle', 'description' => '', 'image' => '/images/EvShacman.png', 'link' => '/ev-shacman'],
            ['brand' => 'shacman', 'name' => 'Shacman Fuel Tanker', 'type' => 'Tanker Trucks', 'category' => 'tanker-trucks', 'description' => '', 'image' => '/images/shacman_fuel_tanker.png', 'link' => '/shacman-fuel-tanker'],
            ['brand' => 'shacman', 'name' => 'Shacman Self Loader', 'type' => 'Construction & Utility Vehicles', 'category'=> 'construction-utility-vehicles','description' => '', 'image' => '/images/shacman_self_loader.png', 'link' => '/shacman-self-loader'],
            ['brand' => 'shacman', 'name' => 'Shacman Wing Van', 'type' => 'Heavy Trucks', 'category' => 'heavy-trucks', 'description' => '', 'image' => '/images/shacman_wing_van.png', 'link' => '/shacman-wing-van'],
            ['brand' => 'shacman', 'name' => 'Shacman Dump Truck H3000', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/Shacman_Dump_Truck_H3000.png', 'link' => '/shacman-dump-truck-h3000'],
            ['brand' => 'shacman', 'name' => 'Shacman Dump Truck X3000', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/Shacman_Dump_Truck_X3000.png', 'link' => '/shacman-dump-truck-x3000'],
            // Kingling Isuzu
            ['brand' => 'kingling-isuzu', 'name' => 'Isuzu 700 PFFR', 'type' => 'Medium Trucks', 'category' => 'medium-trucks', 'description' => '', 'image' => '/images/Kingling_700P_FFR_Medium_Duty_Truck.png', 'link' => '/isuzu-700-pffr'],
            ['brand' => 'kingling-isuzu', 'name' => 'Aspahlt Distributor', 'type' => 'Construction & Utility Vehicles', 'category'=> 'construction-utility-vehicles','description' => '', 'image' => '/images/Aspahlt-Distributor.png', 'link' => '/aspahlt-distributor'],
            ['brand' => 'kingling-isuzu', 'name' => 'Dump Truck 6cbm', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/Dump_Truck_6cbm.png', 'link' => '/dump-truck-6cbm'],
            ['brand' => 'kingling-isuzu', 'name' => 'FTR', 'type' => 'Medium Trucks', 'category' => 'medium-trucks', 'description' => '', 'image' => '/images/FTR.png', 'link' => '/ftr'],
            ['brand' => 'kingling-isuzu', 'name' => 'FVR', 'type' => 'Medium Trucks', 'category' => 'medium-trucks', 'description' => '', 'image' => '/images/FVR.png', 'link' => '/fvr'],
            ['brand' => 'kingling-isuzu', 'name' => 'Giga 4x2 Cargo Head', 'type' => 'Heavy Trucks', 'category' => 'heavy-trucks', 'description' => '', 'image' => '/images/Giga_4x2_Cargo_Head_Red.png', 'link' => '/giga-4x2-cargo-head'],
            ['brand' => 'kingling-isuzu', 'name' => 'Giga 4x2 Tractor Head', 'type' => 'Tractor Head Trucks', 'category'=>'tractor-head-trucks', 'description' => '', 'image' => '/images/Giga_4x2_Tractor.png', 'link' => '/giga-4x2-tractor-head'],
            ['brand' => 'kingling-isuzu', 'name' => 'Giga 6x2 Cargo Head', 'type' => 'Heavy Trucks', 'category' => 'heavy-trucks', 'description' => '', 'image' => '/images/Giga_6x2_Cargo_Head.png', 'link' => '/giga-6x2-cargo-head'],
            ['brand' => 'kingling-isuzu', 'name' => 'Giga 6x4 Cargo Head', 'type' => 'Heavy Trucks', 'category' => 'heavy-trucks', 'description' => '', 'image' => '/images/Giga_6x4_Cargo_Head_Blue.png', 'link' => '/giga-6x4-cargo-head'],
            ['brand' => 'kingling-isuzu', 'name' => 'Giga 6x4 Dump Truck', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/Giga_6x4_Dump_Truck.png', 'link' => '/giga-6x4-dump-truck'],
            ['brand' => 'kingling-isuzu', 'name' => 'Giga 6x4 Tractor Head', 'type' => 'Tractor Head Trucks', 'category'=>'tractor-head-trucks', 'description' => '', 'image' => '/images/Giga_6x4_Tractor_Head.png', 'link' => '/giga-6x4-tractor-head'],
            ['brand' => 'kingling-isuzu', 'name' => 'Giga 8x4 Cargo Head', 'type' => 'Heavy Trucks', 'category' => 'heavy-trucks', 'description' => '', 'image' => '/images/Giga_8x4_Cargo_Head.png', 'link' => '/giga-8x4-cargo-head'],
            ['brand' => 'kingling-isuzu', 'name' => 'Giga Boom', 'type' => 'CraneTrucks', 'category' => 'crane-trucks', 'description' => '', 'image' => '/images/Giga_Boom_Red.png', 'link' => '/giga-boom'],
            ['brand' => 'kingling-isuzu', 'name' => 'Giga Mixer Truck 10W 10CBM', 'type' => 'Mixer Trucks', 'category' => 'mixer-trucks', 'description' => '', 'image' => '/images/Giga_Mixer_Truck_10W10CBM.png', 'link' => '/giga-mixer-truck-10W-10CBM'],
            ['brand' => 'kingling-isuzu', 'name' => 'GTH 6x4 300HP', 'type' => 'Tractor Head Trucks', 'category'=>'tractor-head-trucks', 'description' => '', 'image' => '/images/GTH_6x4_300HP.png', 'link' => '/gth-6x4-300HP'],
            ['brand' => 'kingling-isuzu', 'name' => 'Isuzu 6W Garbage', 'type' => 'Garbage & Waste Management Trucks', 'category' => 'garbage-waste-management-trucks', 'description' => '', 'image' => '/images/Isuzu_6W_Garbage.png', 'link' => '/isuzu-6w-garbage'],
            ['brand' => 'kingling-isuzu', 'name' => 'Isuzu Bus ', 'type' => 'Passenger Transport', 'category' => 'passenger-transport', 'description' => '', 'image' => '/images/Isuzu_Bus.png', 'link' => '/isuzu-bus'],
            ['brand' => 'kingling-isuzu', 'name' => 'Kingling Isuzu FVR 6 Wheeler 6000Liters PTO Firetruck', 'type' => 'Emergency & Special Purpose Vehicles', 'category' => 'emergency-special-purpose-vehicles', 'description' => '', 'image' => '/images/Isuzu-FVR-6-Wheeler-6000-Liters-PTO-Fire-Truck.png', 'link' => '/FVR-6-Wheeler-Firetruck'],
            ['brand' => 'kingling-isuzu', 'name' => 'Isuzu NLR 4 Wheeler 1500Liters PTO Firetruck', 'type' => 'Emergency & Special Purpose Vehicles', 'category' => 'emergency-special-purpose-vehicles', 'description' => '', 'image' => '/images/Isuzu-NLR-4-Wheeler-1500-Liters-PTO-Fire-Truck.png', 'link' => '/NLR-4-Wheeler-Firetruck'],
            ['brand' => 'kingling-isuzu', 'name' => 'Kingling Isuzu Sewage', 'type' => 'Garbage & Waste Management Trucks', 'category' => 'garbage-waste-management-trucks', 'description' => '', 'image' => '/images/Isuzu_Sewage.png', 'link' => '/kingling-isuzu-sewage'],
            ['brand' => 'kingling-isuzu', 'name' => 'NKR 600P', 'type' => 'Light Trucks', 'category' => 'light-trucks', 'description' => '', 'image' => '/images/NKR_600p.png', 'link' => '/nkr-600p'],
            ['brand' => 'kingling-isuzu', 'name' => 'NPR 700P', 'type' => 'Light Trucks', 'category' => 'light-trucks', 'description' => '', 'image' => '/images/NPR_700P.png', 'link' => '/npr-700p'],
            // Sinotruk
            ['brand' => 'sinotruk', 'name' => 'Cargo Truck 6 Wheeler', 'type' => 'Light Trucks', 'category' => 'light-trucks', 'description' => '', 'image' => '/images/cargo-truck-6-wheeler-1.png', 'link' => '/cargo-truck-6-wheeler'],
            ['brand' => 'sinotruk', 'name' => '4-Cubic Meter Dump Truck', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/dump-truck-4-cubic.png', 'link' => '/four-cubic-meter-dump-truck'],
            ['brand' => 'sinotruk', 'name' => 'Dump Truck 12 Cubic', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/dump-truck-12-cubic.png', 'link' => '/dump-truck-12-cubic'],
            ['brand' => 'sinotruk', 'name' => 'Garbage Truck 5 Cubic', 'type' => 'Garbage & Waste Management Trucks', 'category' => 'garbage-waste-management-trucks', 'description' => '', 'image' => '/images/garbage-truck-5-cubic.png', 'link' => '/garbage-truck-5-cubic'],
            ['brand' => 'sinotruk', 'name' => '4x2 Manlift Truck', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/manlift-truck-4x2.png', 'link' => '/sinotruk-4x2-manlift-truck'],
            ['brand' => 'sinotruk', 'name' => 'Mixer Truck 4 Cubic', 'type' => 'Mixer Trucks', 'category' => 'mixer-trucks', 'description' => '', 'image' => '/images/mixer-truck-4-cubic.png', 'link' => '/mixer-truck-4-cubic'],
            ['brand' => 'sinotruk', 'name' => 'Mixer Truck 6 Cubic', 'type' => 'Mixer Trucks', 'category' => 'mixer-trucks', 'description' => '', 'image' => '/images/mixer-truck-6-cubic-1.png', 'link' => '/mixer-truck-6-cubic'],
            ['brand' => 'sinotruk', 'name' => 'Oil Fuel Water Tanker 4 Cubic', 'type' => 'Tanker Trucks', 'category' => 'tanker-trucks', 'description' => '', 'image' => '/images/oil-fuel-water-tanker-4-cubic.png', 'link' => '/oil-fuel-tanker-4-cubic'],
            ['brand' => 'sinotruk', 'name' => 'Oil Fuel Water Tanker 10 Cubic', 'type' => 'Tanker Trucks', 'category' => 'tanker-trucks', 'description' => '', 'image' => '/images/oil-fuel-water-tanker-10-cubic_1.png', 'link' => '/oil-fuel-tanker-10-cubic'],
            // Forland
            ['brand' => 'forland', 'name' => 'Cargo Truck 14 Realft', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/Forland-Cargo-Truck-14-Realft.png', 'link' => '/cargo-truck-14-realft'],
            ['brand' => 'forland', 'name' => 'Cargo Truck 20ft', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/Forland-Cargo-Truck-20ft.png', 'link' => '/cargo-truck-20ft'],
            ['brand' => 'forland', 'name' => 'Dump Truck 6CBM', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/Forland-Dump-Truck-6CBM.png', 'link' => '/dump-truck-6cbm'],
            ['brand' => 'forland', 'name' => 'L7 Cargo Truck', 'type' => 'Light Trucks', 'category' => 'light-trucks', 'description' => '', 'image' => '/images/Forland-L7-Cargo-Truck.png', 'link' => '/l7-cargo-truck'],
            ['brand' => 'forland', 'name' => 'L3 Cargo Truck', 'type' => 'Light Trucks', 'category' => 'light-trucks', 'description' => '', 'image' => '/images/Forland-L3-Cargo-truck.png', 'link' => '/l3-cargo-truck'],
            ['brand' => 'forland', 'name' => 'L5 Cargo Truck', 'type' => 'Light Trucks', 'category' => 'light-trucks', 'description' => '', 'image' => '/images/L5.png', 'link' => '/l5-cargo-truck'],
            ['brand' => 'forland', 'name' => 'Forland M6', 'type' => 'Light Trucks', 'category' => 'light-trucks', 'description' => '', 'image' => '/images/Forland-M6.png', 'link' => '/forland-m6'],
            ['brand' => 'forland', 'name' => 'T3 Cargo Truck', 'type' => 'Light Trucks', 'category' => 'light-trucks', 'description' => '', 'image' => '/images/Forland_T3_Cargo_Truck.png', 'link' => '/t3-cargo-truck'],
            ['brand' => 'forland', 'name' => 'T5 Cargo Truck', 'type' => 'Light Trucks', 'category' => 'light-trucks', 'description' => '', 'image' => '/images/Forland_T5_Cargo_Truck.png', 'link' => '/t5-cargo-truck'],
            ['brand' => 'forland', 'name' => 'T5 Modern Jeepney Class 1', 'type' => 'Passenger Transport', 'category' => 'passenger-transport', 'description' => '', 'image' => '/images/T5_Mordern_Jeepney_Class_1.png', 'link' => '/t5-modern-jeepney-class-1'],
            ['brand' => 'forland', 'name' => 'Forland T5 4x2 Dump Truck', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/Forland_T5_4x2_Dump_Truck.png', 'link' => '/forland-t5-4x2-dump-truck'],
            ['brand' => 'forland', 'name' => 'Forland Cargo Truck 17ft', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/Forland-Cargo-Truck-17ft.png', 'link' => '/forland-cargo-truck-17ft'],
            ['brand' => 'forland', 'name' => 'Forland Dump Truck 3CBM', 'type' => 'Dump Trucks', 'category'=>'dump-trucks', 'description' => '', 'image' => '/images/Forland-Dump-Truck-3CBM.png', 'link' => '/forland-dump-truck-3CBM'],
    ]);  //Total of 60 products

    $brand = request('brand');
    $category = request('category');

    if ($brand) {
        $products = $products->where('brand', $brand);
    }
    if ($category) {
        $products = $products->where('category', $category);
    }    

    $perPage = 12;
    $currentPage = request()->get('page',1);
    $paginatedProducts = new LengthAwarePaginator(
            $products->forPage($currentPage, $perPage),
            $products->count(),
            $perPage,
            $currentPage,
            [
                'path' => request()->url(),
                'query' => request()->query(),
            ]
    );


        return view('pages.product', [
            'products' => $paginatedProducts

        ]);
    }
}
