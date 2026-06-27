<section class="relative overflow-hidden">
    <img src="/images/Background-About-Page.jpg" class="hidden" fetchpriority="high" alt="">
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/80"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            
            <!-- Left Text -->
            <div class="text-white"
                data-aos="fade-right"   
                data-aos-offset="300" 
                data-aos-duration="2000"
            >
                <h2 class="text-6xl font-extrabold">
                    Get in Touch
                </h2>
                <span class="mt-4 text-gray-200 p-1 ">
                    <p class="indent-2 mb-3">
                        Have questions about our trucks, heavy equipments, or power equipment?
                        Our team is ready to assist you!
                    </p>
                    <p class="indent-2">
                        The Legacy Trucks And Tractors INC. are commited to deliver an exceptional service
                        that you will enjoy and remember.
                    </p>
                </span>
            </div>

            <!-- Glass Form -->
            <div class="backdrop-blur-md bg-white/10 border border-white/20 rounded-xl p-8 shadow-lg"
                data-aos="fade-left"   
                data-aos-offset="300" 
                data-aos-duration="2000"
            >
                <form class="space-y-4" method="POST" action="{{ route('store') }}">
                    @csrf
                    <!-- Names -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <label for="first_name" class="sr-only">First Name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="First Name" required
                            class="w-full bg-white/20 text-white placeholder-gray-300 border border-white/30 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" autocomplete="off">

                        <label for="last_name" class="sr-only">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Last Name" required
                            class="w-full bg-white/20 text-white placeholder-gray-300 border border-white/30 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" autocomplete="off">
                    </div>

                    <label for="email" class="sr-only">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Email Address" required
                        class="w-full bg-white/20 text-white placeholder-gray-300 border border-white/30 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" autocomplete="off">

                    <label for="phone" class="sr-only">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number"
                        class="w-full bg-white/20 text-white placeholder-gray-300 border border-white/30 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" autocomplete="off">

                    <label for="message" class="sr-only">Your Message</label>
                    <textarea rows="4" id="message" name="message" rows="4" placeholder="Your Message"
                        class="w-full bg-white/20 text-white placeholder-gray-300 border border-white/30 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" autocomplete="off"></textarea>

                    {{-- Fuck you bots ./. --}}
                    <label for="website" class="sr-only">Your Website</label>
                    <input type="text" name="website" style="position:absolute; left:-9999px;" tabindex="-1" autocomplete="off">

                    <div class="g-recaptcha px-4 py-2 w-full" data-sitekey="{{ env('RECAPTCHA_SITE') }}"></div>

                    <button
                        type="submit"
                        class="w-full bg-[#47579c] hover:bg-[#2d366b] text-white font-semibold py-3 rounded-lg transition cursor-pointer">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

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