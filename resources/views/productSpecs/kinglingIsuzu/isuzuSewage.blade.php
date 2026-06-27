@extends('app')

@section('title', 'Kingling Isuzu Sewage || The Legacy Trucks and Tractors')
@section('meta_description', 'The Kingling Isuzu Sewage Truck is a specialized heavy-duty vehicle designed for sanitation and waste management, equipped with a high-powered vacuum pump and sealed tank for collecting and transporting sewage, sludge, and liquid waste.')

@section('content')
    <section
        class="mx-auto max-w-7xl px-4 my-4 overflow-hidden min-h-screen flex items-center justify-center"
        data-aos="fade-up"   
        data-aos-offset="200" 
        data-aos-duration="2000"
        >
        <div>
            @foreach ($products as $product)
                <div class="grid md:grid-cols-2 gap-10 items-center justify-center">          
                    <!-- Image -->
                    <div class="bg-gray-100 rounded-2xl p-6 flex items-center justify-center shadow-xl">
                        <img 
                            src="{{ $product['image'] }}" 
                            alt="{{ $product['name'] }}" 
                            class="max-h-100 w-full object-contain"
                            loading="lazy" 
                            decoding="async"
                        >
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col gap-5 mb-0 sm:mb-10">
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
                            {{ $product['name'] }}
                        </h1>

                        <p class="text-gray-600 leading-relaxed">
                            {{ $product['description'] }}
                        </p>

                        <!-- Optional CTA -->
                        <div class="flex gap-4 mt-4">
                            <a href="{{ '/contact' }}" class="px-6 py-3 bg-[#47579c] text-white rounded-xl shadow hover:bg-[#2d366b] transition">
                                Inquire Now
                            </a>

                            
                            <button onclick="alert('This feature is under construction. You can contact us to request the specs in the meantime.')" href="#" class="px-6 py-3 border border-gray-300 rounded-xl hover:bg-gray-400 transition cursor-pointer">
                                Download Specs
                            </button >
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>
@endsection