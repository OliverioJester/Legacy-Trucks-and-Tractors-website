@extends('app')

@section('title', 'Products || The Legacy Trucks and Tractors')
@section('meta_description', 'Discover our wide range of high-quality trucks, heavy equipment, generators, and specialized vehicles.
Designed to meet your every need with reliability and performance!')

@section('content')
    <section 
        class="p-4  overflow-hidden "
        data-aos="fade-up"   
        data-aos-offset="200" 
        data-aos-duration="2000"
    >
        <!-- ================= PAGE TITLE ================= -->
        <div class="flex flex-wrap gap-4 mb-10">
            <a href="{{ '/products' }}">
                <button class="px-4 py-2 rounded-lg shadow hover:bg-gray-300 cursor-pointer">All</button>
            </a>
            <div class="relative inline-block text-left group">
                <!-- Button -->
                <button class="px-4 py-2 rounded-lg shadow bg-white hover:bg-gray-300 transition cursor-pointer">
                    Categories
                </button>

                <!-- Dropdown Menu -->
                <div class="absolute left-0 mt-2 w-64 bg-gray-200 rounded-lg shadow-lg
                            max-h-64 overflow-y-auto
                            opacity-0 invisible group-hover:visible group-hover:opacity-100
                            transition-all duration-200">
                    <ul class="flex flex-col">
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=construction-utility-vehicles">Construction & Utility Vehicles</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=dump-trucks">Dump Trucks</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=mixer-trucks">Mixer Trucks </a>
                            </li>
                       
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=tanker-trucks">Tanker Trucks</a>
                            </li>       
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=tractor-head-trucks">Tractor Head Trucks</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=heavy-trucks">Heavy Trucks</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=medium-trucks">Medium Trucks</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=light-trucks">Light Trucks</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=garbage-waste-management-trucks">Garbage & Waste Management Trucks</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=emergency-special-purpose-vehicles">Emergency & Special Purpose Vehicles</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=crane-trucks">Crane Trucks</a>
                            </li>
                            
                            <li class="hover:bg-gray-400">
                                 <a class='block z-10 px-4 py-2' href="/products?category=electric-vehicle">Electric Vehicle (EV)</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=passenger-transport">Passenger Transport</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?category=power-generators">Power Generators</a>
                            </li>
                        
                    </ul>
                </div>
            </div>

            <div class="relative inline-block text-left group">
                <!-- Button -->
                <button class="px-4 py-2 rounded-lg shadow bg-white hover:bg-gray-300 transition cursor-pointer">
                    Brands
                </button>

                <!-- Dropdown Menu -->
                <div class="absolute left-0 mt-2 w-64 bg-gray-200 rounded-lg shadow-lg
                            max-h-64 overflow-y-auto
                            opacity-0 invisible group-hover:visible group-hover:opacity-100
                            transition-all duration-200">
                    <ul class="flex flex-col">
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?brand=weichai">Weichai Heavy Equipment</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?brand=powerquip">Powerquip</a>
                            </li>
                       
                            <li class="hover:bg-gray-400">
                                 <a class='block z-10 px-4 py-2' href="/products?brand=weichai-powergen">Weichai Powergen</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?brand=shacman">Shacman</a>
                            </li>
                    
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?brand=sinotruk">Sinotruk</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                               <a class='block z-10 px-4 py-2' href="/products?brand=forland"> Forland</a>
                            </li>
                        
                            <li class="hover:bg-gray-400">
                                <a class='block z-10 px-4 py-2' href="/products?brand=kingling-isuzu">Kingling Isuzu</a>
                            </li>
                    </ul>
                </div>
            </div>
            {{-- <a href="">
                <button class="px-4 py-2 rounded-lg shadow">Equipment</button>
            </a> --}}
        </div>

        <!-- Product Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8"

        >
            @foreach ( $products as $product)
                <div x-show="category==='all' || category==='{{ $product['type'] }}'" class="bg-white rounded-xl shadow overflow-hidden">
                    <div class="h-72 bg-gray-300 p-1">
                        <img src={{ $product['image'] }} alt={{ $product['name'] }} class="object-contain size-full" loading="lazy" decoding="async">
                    </div>
                    <div class="p-6">
                        <span class="text-xs uppercase text-gray-500">{{ ucfirst($product['type']) }}</span>
                            <h3 class="text-xl font-semibold mt-2">{{ $product['name'] }}</h3>
                        <p class="text-sm text-gray-600 mt-2">{{ $product['description'] }}</p>


                        <div class="mt-4 flex justify-between items-center">
                            <a href={{ $product['link'] }} class="text-indigo-600 font-semibold hover:underline" aria-label="View details for {{$product['name']}}">View Details</a>
                            {{-- <button class="text-indigo-600 font-semibold hover:underline cursor-pointer" onclick="alert('Under Construction, coming soon...')">View Details</button> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-10 ">
            {{ $products->links() }}
        </div>
    </section>
@endsection