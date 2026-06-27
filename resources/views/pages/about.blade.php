@extends('app')

@section('title', 'About || The Legacy Trucks and Tractors')
@section('meta_description', 'The Legacy Trucks and Tractors Incorporated are exclusive distributor of Wechai, Powerquip, Shacman, Kingling Isuzu, Sinotruk, and Forland products in the Philippines.')


@section('content')
 <!-- ================= PAGE HERO ================= -->
<section class="overflow-hidden relative  text-white py-28 min-h-screen ">
    <img 
        src="/images/Background-About-Page.jpg"
        alt="Hero Background"
        class="fixed inset-0 w-full h-full object-cover "
        fetchpriority="high"

    />
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">
        <div 
            class="w-full aspect-video"
            data-aos="fade-right"   
            data-aos-offset="200" 
            data-aos-duration="2000"
        >
            <iframe 
                src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1190094496273747%2F&show_text=false&width=560&t=0"
                class="w-full h-full rounded-2xl"
                style="border:none;overflow:hidden"
                scrolling="no"
                frameborder="0"
                allowfullscreen
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                loading="eager"
                >
            </iframe>
        </div>
        <span 
            class=" bg-black/40 rounded-2xl w-full h-full p-12 "
            data-aos="fade-left"   
            data-aos-offset="200" 
            data-aos-duration="2000"
        >
            <h2 class="text-5xl font-bold">About Our Company</h2>
            <p class=" font-semibold mt-4 text-lg indent-8">
                The Legacy Trucks and Tractors Inc. is the Philippine`s No. 1 
                premium importer and official distributor of top China truck and heavy equipment brands, 
                including Sinotruk HOWO, Shacman, and Weichai.
            </p>
        </span>
    </div>
</section>

<!-- ================= ABOUT CONTENT ================= -->
<section class="py-20 min-h-screen overflow-hidden relative bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">
        <div
            data-aos="fade-right"   
            data-aos-offset="100" 
            data-aos-duration="2000"
        >
            <h3 class="text-4xl font-bold mb-4">Who We Are</h3>
            <p class="text-gray-600 text-base mb-4 indent-8">
                The Legacy Trucks and Tractors Incorporated is a distributor of Weichai, Shacman, Kinglong Isuzu, Sinotruk, and Forland products in the Philippines.
                We are also the official distributor of POWERQUIP heavy equipment and generators. The company focuses on providing a wide range of commercial trucks and delivering quality services that offer better and more efficient solutions for our valued clients. 
                
            </p>
            <p class="text-gray-600 text-base indent-8">
                The Legacy Trucks and Tractors Incorporated is committed to meeting the expectations of all our clients while treating them with honesty and integrity. We strive to provide equipment and services that promote cleaner, energy-efficient, and safer operations.
            </p>
        </div>
        <div 
            data-aos="fade-left"   
            data-aos-offset="100" 
            data-aos-duration="2000"
        >
            <img src="/images/The-Legacy-Trucks-and-Tractors-Team.jpg" class="object-contain size-ful rounded-xl" alt="The Legacy Trucks and Tractors Team" loading="lazy">
        </div>
        <div 
            class=""
            data-aos="fade-right"   
            data-aos-offset="200" 
            data-aos-duration="2000"
        >
            <h3 class="text-4xl font-semibold mb-3 text-center">Our Mission</h3>
            <p class="text-gray-600 text-base indent-8">
                To ensure that the core values of Integrity, Commitment,
                Excellence, Teamwork and Concern for others be the
                foundation of achieving our vision.
                We shall constantly improve our systems & processes,
                applying new technology to provide responsive after
                sales support to our customers/business partners and
                safeguard our stakeholders.
            </p>
        </div>
        <div 
            class=""
            data-aos="fade-left"   
            data-aos-offset="200" 
            data-aos-duration="2000"
        >
            <h3 class="text-4xl font-semibold mb-3 text-center ">Our Vision</h3>
            <p class="text-gray-600 text-base indent-8">
                To be the top of mind product solution covering its
                targeted industries by providing quality products and
                technological innovation to our business partners and
                our stakeholders. These are the foundation that guide our
                business in building our legacy.
                
            </p>
                 
        </div>
    </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="bg-gray-200 py-20 min-h-screen overflow-hidden flex items-center justify-center relative">
    <div 
        class="max-w-7xl mx-auto px-6"
        data-aos="fade-up"   
        data-aos-offset="200" 
        data-aos-duration="2000"
    >
        <h3 class="text-4xl font-bold mb-10 text-center">Why Choose Us</h3>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="bg-white p-6 rounded-xl shadow-lg py-10 text-center">
                <h4 class="text-xl font-semibold mb-3">Industry Experience</h4>
                <p class="text-gray-600">
                    With years of hands-on experience in heavy equipment, trucks, and tractors, 
                    we understand the real needs of our clients. Our knowledge allows us to 
                    recommend the right solutions that improve efficiency and long-term performance.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg py-10 text-center">
                <h4 class="text-xl font-semibold mb-3">Quality Products</h4>
                <p class="text-gray-600">
                    We provide only carefully tested and reliable machinery sourced from trusted 
                    manufacturers. Every product is selected to meet high standards, ensuring 
                    durability, safety, and consistent performance in demanding environments.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg py-10 text-center">
                <h4 class="text-xl font-semibold mb-3">After-Sales Support</h4>
                <p class="text-gray-600">
                    Our commitment does not end after purchase. We offer full after-sales support 
                    including maintenance services, spare parts availability, and technical 
                    assistance to keep your operations running smoothly without interruption.
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-lg py-10 text-center">
                <h4 class="text-xl font-semibold mb-3">Trusted Partnerships</h4>
                <p class="text-gray-600">
                    We build long-term relationships based on trust, reliability, and consistent 
                    results. Our clients rely on us as a dependable partner who understands their 
                    business and supports their growth over time.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ================= CALL TO ACTION ================= -->
<section class="relative text-white py-28 bg-fixed min-h-screen flex items-center">
    <div class="absolute inset-0 bg-black/30"></div>

    <div class="max-w-4xl mx-auto text-center px-6 relative z-10">
        <h3 
            class="text-4xl md:text-5xl font-bold mb-6"
            data-aos="fade-right"   
            data-aos-offset="200" 
            data-aos-duration="2000"
        >
            Find the Right Truck or Heavy Equipment for Your Business</h3>
        <p 
            class="text-lg md:text-xl mb-8"
            data-aos="fade-left"   
            data-aos-offset="200" 
            data-aos-duration="2000"
        >
            Explore our trucks and heavy equipment or contact our team
            to find the right solution for your business.
        </p>

        <div 
            class="flex justify-center gap-4"
            data-aos="fade-up"   
            data-aos-offset="100" 
            data-aos-duration="2000"
        >
            <a href="/products" class="bg-[#47579c] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#2d366b] transition">
                View Products
            </a>
            <a href="/contact" class="px-8 py-3 border border-white rounded-lg hover:bg-white hover:text-black transition">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection