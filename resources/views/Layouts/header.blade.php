<header 
    x-data="{ scrolled: false }"
    @scroll.window="scrolled = window.scrollY > 40"
    class="sticky top-0 z-50 bg-linear-to-b text-white from-[#47579c] to-[#2d366b] shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center ">
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            @if(request()->is('/'))
                    <img 
                        src="/images/Logo.png"
                        alt="Logo of Legacy Trucks and Tractors"
                        class="h-10 transition-transform duration-500 w-auto object-contain"
                        loading='eager'
                        :class="scrolled ? 'scale-100 translate-x-0' : 'scale-150 translate-x-5'"
                    >
       
                    <img 
                        src="/images/TheLegacyTrucksandTractors.png"
                        alt="Legacy Trucks and Tractors"
                        class="h-10 w-auto object-contain transition-transform duration-500"
                        loading='eager'
                        :class="scrolled 
                            ? 'opacity-100 translate-x-0' 
                            : 'opacity-0 translate-x-10'"
                    >
                @else
                    <img 
                        src="/images/Logo.png"
                        alt="Logo of Legacy Trucks and Tractors"
                        class="h-10 w-auto object-contain"
                        loading='eager'
                    >
                    <img 
                        src="/images/TheLegacyTrucksandTractors.png"
                        alt="Legacy Trucks and Tractors"
                        class="h-10 w-auto object-contain opacity-100"
                        loading='eager'
                    >
                @endif
        </a>

        <nav class="space-x-6 hidden md:block">
            <a href="{{ url('/') }}" class="hover:[text-shadow:0_0_5px_white,0_0_15px_white,0_0_25px_white] transition-all duration-300">
                Home
            </a>
            <a href="{{ url('/products') }}" class="hover:[text-shadow:0_0_5px_white,0_0_15px_white,0_0_25px_white] transition-all duration-300">
                Products
            </a>
            <a href="{{ url('/about') }}" class="hover:[text-shadow:0_0_5px_white,0_0_15px_white,0_0_25px_white] transition-all duration-300">
                About
            </a>
            <a href="{{ url('/contact') }}" class="hover:[text-shadow:0_0_5px_white,0_0_15px_white,0_0_25px_white] transition-all duration-300">
                Contact
            </a>
        </nav>
 <div class="relative md:hidden group">
    <!-- Burger Button -->
    <button
        class="p-2 rounded-md hover:bg-white/10 transition "
        aria-label="Open navigation menu"
    >
        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-7 h-7"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2">
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>



    <!-- Dropdown -->

        <!-- Triangle Tail-->
        <div
            class="hidden group-hover:block absolute top-10 right-3 
                w-6 h-3 bg-[#47579c]
                [clip-path:polygon(50%_0%,0%_100%,100%_100%)]">
        </div>

        <div
            class="hidden group-hover:block absolute right-0 mt-1 w-60 rounded-lg z-20
                bg-linear-to-b from-[#47579c] to-[#2d366b]
                shadow-xl overflow-hidden"
        >

            <a href="{{ url('/') }}"
                class="block px-5 py-3 hover:bg-white/10">
                Home
            </a>

            <a href="{{ url('/products') }}"
                class="block px-5 py-3 hover:bg-white/10">
                Products
            </a>

            <a href="{{ url('/about') }}"
                class="block px-5 py-3 hover:bg-white/10">
                About
            </a>

            <a href="{{ url('/contact') }}"
                class="block px-5 py-3 hover:bg-white/10">
                Contact
            </a>
        </div>
</div>   
    </div>

</header>