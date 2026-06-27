<section class="bg-gray-200 py-10 px-10 overflow-hidden relative">
    <h2 class="text-center mb-4 text-5xl font-bold"
        data-aos="fade-right"   
        data-aos-offset="200" 
        data-aos-duration="2000"
    >Featured Products</h2>
    <p class="text-center mb-4"
        data-aos="fade-left"   
        data-aos-offset="200" 
        data-aos-duration="2000"
    >
        Discover our wide range of high-quality trucks, heavy equipment, generators, and specialized vehicles.<br/>
        Designed to meet your every need with reliability and performance!
    </p>

    <div class="glide max-w-7xl mx-auto px-12"
        data-aos="fade-up"   
        data-aos-offset="200" 
        data-aos-duration="2000"
    >
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                @foreach($fetured_products as $item)
                    <li class="glide__slide px-4">
                        <div class="bg-white rounded-xl shadow p-6">
                            <div class="aspect-4/3 w-full overflow-hidden rounded-xl mb-4">
                                <img src="{{ $item['image'] }}"class="object-contain size-full" loading="lazy" decoding="async" alt="{{ $item['name'] }}">
                            </div>
                            <h3 class="text-xl font-semibold">{{ $item['name'] }}</h3>
                            <p class="text-sm text-gray-600 my-2">{{ $item['desc'] }}</p>
                            <span class="justify-center flex">
                                {{-- <x-button>View Details</x-button> --}}
                                <a href={{ $item['link'] }} class="text-white bg-[#47579c] px-6 py-3 rounded-lg font-semibold hover:bg-[#2d366b] transition" aria-label="View details for {{$item['name']}}">View Details</a>
                            </span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Controls -->
        <div data-glide-el="controls">
            <button data-glide-dir="<"
                class="absolute left-0 top-1/2 -translate-y-1/2 p-4 cursor-pointer">
                <img src="/svg/left-arrow.svg" class="h-10" alt="arrow-left icon" loading=lazy>
            </button>

            <button data-glide-dir=">"
                class="absolute right-0 top-1/2 -translate-y-1/2 p-4 cursor-pointer">
                <img src="/svg/right-arrow.svg" class="h-10" alt="arrow-right icon" loading=lazy>
            </button>
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        <template x-for="(item, index) in items" :key="index">
            <div class="bg-white rounded-xl shadow p-6 transition-all duration-500">
                <h3 class="text-xl font-semibold" x-text="item.name"></h3>
                <p class="text-sm text-gray-600 mt-2" x-text="item.desc"></p>
            </div>
        </template>
    </div>
        <div  class="text-center mt-4">
            <a href="{{ url('/products') }}" class="flex flex-col items-center text-center gap-1 hover:text-lg hover:text-indigo-700  text-sm font-medium text-[#47579c] ">
                <p class="  ">Explore our full range of products</p>
                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="size-6 ">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </a>
        </div>    
</div>


</section>

<script>
    new Glide('.glide', {
        type: 'carousel',
        startAt: 0,
        perView: 3,
        gap: 0,
        animationDuration: 500,
        hoverpause: true,
        rewind: false,

        breakpoints: {
            1024: {
                perView: 2
            },
            640: {
                perView: 1
            }
        }
    }).mount()
</script>

