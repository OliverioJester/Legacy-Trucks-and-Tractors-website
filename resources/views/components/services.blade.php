<div class="py-10 px-20 overflow-hidden relative bg-white">
    <h1 
        class="text-center mb-4 text-5xl font-bold"
        data-aos="fade-right"   
        data-aos-offset="200" 
        data-aos-duration="2000"
    >Our Services</h1>
    <p 
        class="text-center mb-10"
        data-aos="fade-left"   
        data-aos-offset="200" 
        data-aos-duration="2000"
    >
        You can check what type of services we offer!
    </p>

    <div 
        class="grid grid-cols-1 md:grid-cols-4 gap-4 md:mb-40"
        data-aos="fade-up"   
        data-aos-offset="200" 
        data-aos-duration="2000"
    >
        <div 
            x-data="{hover: false}"
            @mouseenter="hover = true"
            @mouseleave="hover = false"
            class="rounded-xl shadow-md transition-all duration-300 bg-gray-300 flex items-center justify-center flex-col p-3" 
            :class="hover? 'h-auto' : 'h-64 '">
                <img src="/svg/backhoe_Icon.svg" alt="Excavator Icon" class="transition-all duration-300" :class="hover? 'w-14 h-14' : 'w-24 h-24'" loading="lazy"/>
                <p class="transition-all duration-200" :class="hover? 'hidden' : 'block'">
                    SALES
                </p>
            <span class="transition-all duration-200 text-center" :class="hover? 'block' : 'hidden'">
                <p class="mb-5">
                    Not sure what to buy? Worry no more! The Legacy Trucks and Tractors Inc. 
                    Has an exceptional sales team ready to help you choose, 
                    compare, and decide on perfect product to suit your needs.
                </p>
                <p class="text-indigo-500 font-bold">
                    Contact our Sales Department:
                    <br>
                    <x-salesNumber />
                </p>
            </span>
        </div>
        <div 
            x-data="{hover: false}"
            @mouseenter="hover = true"
            @mouseleave="hover = false"
            class="rounded-xl shadow-md transition-all duration-300 bg-gray-300 flex items-center justify-center flex-col p-3"
            :class="hover? 'h-auto' : 'h-64 '">
            <img src="/svg/motor.svg" alt="Motor Icon" class="transition-all duration-300" :class="hover? 'w-14 h-14' : 'w-24 h-24'" loading='lazy'/>
            <p :class="hover? 'hidden' : 'block'">SPARE PARTS</p>
            <span class="transition-all duration-200 text-center" :class="hover? 'block' : 'hidden'">
                <p class="mb-5">
                    We provide original, high-quality spare parts to help you get the job done right.
                </p>
                <p class="text-indigo-500 font-bold">
                    Contact our Parts Department:
                    <br>
                    <x-partsNumber/>
                </p>
            </span>
        </div>
        <div
            x-data="{hover: false}"
            @mouseenter="hover = true"
            @mouseleave="hover = false" 
            class="rounded-xl shadow-md h-64   transition-all duration-300 bg-gray-300 flex items-center justify-center flex-col p-3"
            :class="hover? 'h-auto' : 'h-64 '">
            <img src="/svg/wrench.svg" alt="Wrench Icon" class="transition-all duration-300" :class="hover? 'w-14 h-14' : 'w-24 h-24'" loading='lazy'/>
            <p class="transition-all duration-200" :class="hover? 'hidden' : 'block'">SERVICE</p>
            <span class="transition-all duration-200 text-center" :class="hover? 'block' : 'hidden'">
                <p class="mb-5">
                    Needing a service that arrive ontime? No matter where you are, we have got you covered!
                </p>
                <p class="text-indigo-500 font-bold">
                    Contact our Service Department:
                    <br>
                    <x-serviceNumber/>
                </p>
            </span>
        </div>
        <div
            x-data="{hover: false}"
            @mouseenter="hover = true"
            @mouseleave="hover = false"
            class="rounded-xl shadow-md transition-all duration-300 bg-gray-300 flex items-center justify-center flex-col p-3"
            :class="hover? 'h-auto' : 'h-64 '">
            <img src="/svg/info.svg" alt="Info Icon" class="transition-all duration-300" :class="hover? 'w-14 h-14' : 'w-24 h-24'" loading='lazy'/>
            <p class="">ABOUT US</p>
            <span class="transition-all duration-200  text-center" :class="hover? 'block' : 'hidden'">
                <p class="mb-5">
                    The Legacy Trucks and Tractors Incorporated are exclusive distributor 
                    of Wechai, Powerquip, Shacman, Kingling Isuzu, Sinotruk, and 
                    Forland products in the Philippines.
                </p>
                <a class="text-indigo-500 font-bold hover:text-lg hover:text-indigo-700" href="{{ url('/about') }}">
                    Read more...
                </a>
            </span>
        </div>
    </div>
</div>
