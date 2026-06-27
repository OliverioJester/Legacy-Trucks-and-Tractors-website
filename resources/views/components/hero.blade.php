<section
    class="overflow-hidden relative  text-white py-28 min-h-[80vh] flex justify-center items-center">
    <!-- Hidden image to make fetchpriority effective -->
    <img 
        src="/images/Background_hero.jpg"
        alt="Hero Background"
        class="fixed inset-0 w-full h-full object-cover "
        fetchpriority="high"

    />
    <div class="absolute inset-0 bg-black/70"></div>
    <!-- Content -->
    <div class="relative z-10 text-center text-white max-w-3xl px-6"
    data-aos="zoom-out"
    data-aos-offset="200" 
    data-aos-duration="2000"
    >
        <img 
            src="/images/TheLegacyTrucksandTractors.png" 
            alt="The Legacy Truck And Tractors Inc."
            class="w-2xl "
            fetchpriority="high"
        />
    <!-- Hero Tagline -->
    <p class="mt-4 text-lg md:text-xl text-gray-200 font-semibold">
        THE LEGACY OF EXCELLENCE
    </p>

    <!-- Hero Paragraph -->
    <p class="mt-4 text-lg md:text-xl text-gray-200 leading-relaxed">
        Your trusted dealer of heavy and light trucks, tractors, and power equipment, 
        delivering dependable performance where it matters most.
    </p>

        <!-- Buttons -->
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ url('/products') }}"
               class=" text-white bg-[#47579c]  px-6 py-3 rounded-lg font-semibold hover:bg-[#2d366b] transition">
                View Products
            </a>

            <a href="{{ url('/contact') }}"
               class="px-8 py-3 border border-white rounded-lg hover:bg-white hover:text-black transition">
                Contact Us
            </a>
        </div>
    </div>
</section>
