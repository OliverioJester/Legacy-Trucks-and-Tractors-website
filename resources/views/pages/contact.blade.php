@extends('app')

@section('title', 'Contacts || The Legacy Trucks and Tractors')
@section('meta_description', 'Have questions about our trucks, heavy equipments, or power equipment? Our team is ready to assist you!
The Legacy Trucks And Tractors INC. are commited to deliver an exceptional service that you will enjoy and remember.')

@section('content')

<div class="max-w-7xl mx-auto py-16 px-6">
    <!-- Page Header -->
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h1 
            class="text-5xl font-bold mb-4"
            data-aos="fade-right"   
            data-aos-offset="200" 
            data-aos-duration="2000"
        >
            Contact Us
        </h1>
        <p 
            data-aos="fade-left"   
            data-aos-offset="200" 
            data-aos-duration="2000"
        >
            Have questions? Reach out to us and we`ll be happy to assist you with any inquiries about our
            products and services. Our team is ready to help you find the right trucks, equipment, or generators.
        </p>
    </div>

    <!-- 3 Column Section -->
    <div 
        class="grid md:grid-cols-3 gap-10"
        data-aos="fade-up"   
        data-aos-offset="200" 
        data-aos-duration="2000"
    >

        <!-- Google Map -->
        <section class="bg-gray-200 border border-gray-300 rounded-xl p-6 shadow-xl flex flex-col">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800 text-center">Our Location</h2>

            <iframe
                title="Google Map Location"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4863.361481314158!2d120.98530938897116!3d14.652959067595502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b681b5588cc1%3A0x421f615351cb1be8!2sPOWERTRAC%20SERVICE%20DEPT.!5e0!3m2!1sen!2sph!4v1770425477810!5m2!1sen!2sph"
                class="w-full h-72 md:h-full rounded-lg border"
                loading="lazy">
            </iframe>
        </section>
        
        <!-- Contact Form -->
        <section class="bg-gray-200 border  border-gray-300 rounded-xl p-8 shadow-xl">
            <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Send us a message</h2>
            <form class="space-y-4" method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="grid md:grid-cols-2 gap-4">
                    <label for="first_name" class="sr-only">First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="First Name" required
                        class="bg-white w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" autocomplete="off">
                    
                    <label for="last_name" class="sr-only">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name" required
                        class="bg-white w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" autocomplete="off">
                </div>

                <label for="email" class="sr-only">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Email Address" required
                    class="bg-white w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" autocomplete="off">

                <label for="phone" class="sr-only">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Phone Number"
                    class="bg-white w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" autocomplete="off">

                <label for="messages" class="sr-only">Your Message</label>
                <textarea rows="4" id="messages" name="message" placeholder="Your Message"
                    class="bg-white w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" autocomplete="off"></textarea>
                
                {{-- Fuck you bots ./. --}}
                <label for="website" class="sr-only">Your Website</label>
                <input type="text" id="website" name="website" placeholder="Website" style="position:absolute; left:-9999px;" tabindex="-1" autocomplete="off"> 

                <div class="g-recaptcha g-recaptcha px-4 py-2 w-full" data-sitekey="{{ env('RECAPTCHA_SITE') }}"></div>

                    <button
                        type="submit"
                        class="w-full bg-[#47579c] hover:bg-[#2d366b] text-white font-semibold py-3 rounded-lg transition cursor-pointer">
                        Send Message
                    </button>
            </form>
        </section>

        <!-- Contact Info -->
        <section class="bg-gray-200 border border-gray-300 rounded-xl p-8 shadow-xl">
            <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Contact Information</h2>

            <div class="space-y-3 ">

                <p><span class="font-semibold">Email:</span> <x-email/></p>
                <p><span class="font-semibold">Sales Department:</span> <x-serviceNumber/></p>
                <p><span class="font-semibold">Service Department:</span> <x-salesNumber/></p>
                <p><span class="font-semibold">Parts Department:</span> <x-partsNumber/></p>
                <p><span class="font-semibold">Address:</span> <x-address/></p>

            </div>
        </section>

    </div>

</div>

@if(session('success'))
    <div 
        x-data="{ show: true }"
        x-show="show"
        x-transition.opacity
        class="fixed inset-0 flex items-center justify-center z-50"
    >

        <!-- backdrop (click to close) -->
        <div 
            class="absolute inset-0 bg-black/60"
            @click="show = false"
        ></div>

        <!-- modal -->
        <div 
            @click.away="show = false"
            class="relative bg-linear-to-b text-white from-[#47579c] to-[#2d366b] rounded-lg shadow-lg px-6 py-5 w-[320px]"
        >


            <!-- Content -->
            <h2 class="text-lg font-semibold text-center"> {{ session('success') }}</h2>
            <p class="mt-2 text-sm text-center">
            Thank you for reaching out! Your message has been sent successfully, and we`ll respond as soon as possible.
            </p>

            <!-- Action button -->
            <button 
                @click="show = false"
                class="mt-4 w-full bg-white/20 hover:bg-white/30 py-2 rounded-lg text-sm"
            >
                Close
            </button>
        </div>

    </div>
@endif

@if(session('error'))
    <div 
        x-data="{ show: true }"
        x-show="show"
        x-transition.opacity
        class="fixed inset-0 flex items-center justify-center z-50"
    >

        <!-- backdrop -->
        <div 
            class="absolute inset-0 bg-black/60"
            @click="show = false"
        ></div>

        <!-- modal -->
        <div 
            @click.away="show = false"
            class="relative bg-linear-to-b text-white from-red-500 to-red-700 rounded-lg shadow-lg px-6 py-5 w-[320px]"
        >

            <h2 class="text-lg font-semibold text-center">
                {{ session('error') }}
            </h2>

            <p class="mt-2 text-sm text-center">
                Please check your input or try again later.
            </p>

            <button 
                @click="show = false"
                class="mt-4 w-full bg-white/20 hover:bg-white/30 py-2 rounded-lg text-sm"
            >
                Close
            </button>
        </div>

    </div>
@endif

@endsection