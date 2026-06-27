<!-- ================= FOOTER ================= -->
<footer class="bg-linear-to-t from-[#47579c] to-[#2d366b] text-white py-10 relative">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-4 ">
        <div class="mb-4 md:mb-0  text-center">
            <img 
                src="/images/TheLegacyTrucksandTractors.png"
                alt="The Legacy Trucks and Tractors Inc."
                class="h-20 w-auto object-contain py-2 mx-auto"
                loading='lazy'
            >
            <p>THE LEGACY OF EXCELLENCE</p>
        </div>

        <div class="mb-4 md:mb-0 text-center">
    
              <h2 class='text-[22px] font-semibold text-white py-1 uppercase'>Services:</h2>
              <ul class='text-[16px] my-4 '>
                  <li class='my-2'>Sales</li>
                  <li class='my-2'>Spare Parts</li>
                  <li class='my-2'>Service</li>
                  <li><a href="{{ '/about' }}" class="block z-10">About Us</a></li>
              </ul>
        </div>
            <div class='mb-4 md:mb-0 text-center'>
             
                <h2 class='text-[22px] font-semibold text-white py-1 uppercase'>Contact Us:</h2>
    
                <p class='lg:text-[12px] text-[16px] my-4'>Our Email: <x-email/></p>
                <p class='lg:text-[12px] text-[16px] my-4'>Service Department: <x-serviceNumber/></p>
                <p class='lg:text-[12px] text-[16px] my-4'>Sales Department: <x-salesNumber/></p>
                <p class='lg:text-[12px] text-[16px] my-4'>Parts Department: <x-partsNumber/></p>             
            </div>
            <div class='mb-4 md:mb-0 text-center'>
              <h2 class='text-[22px] font-semibold text-white py-2 uppercase'>Follow Us On</h2>
              <div class='flex space-x-4  justify-center items-center'> 
                <a href='https://www.facebook.com/profile.php?id=61581015767344' 
                    class="bg-white  hover:bg-transparent border-4 border-transparent rounded-2xl  transition-all duration-150 ease-in-out"
                    target="_blank" 
                    rel="noopener noreferrer"                    
                    >
                  <img src="/svg/Facebook-icon.svg" class="size-7" alt="Facebook" loading='lazy'>
                </a>
                <a href='https://www.instagram.com/tltti.ph/'
                    class="bg-white hover:bg-transparent border-4 border-transparent rounded-2xl transition-all duration-150 ease-in-out"
                    target="_blank" 
                    rel="noopener noreferrer"
                >
                  <img src="/svg/Instagram-icon.svg" class="size-7" alt="Instagram" loading='lazy'>
                </a>
                <a href='https://www.tiktok.com/@legacytrucksandtractors'
                    class="bg-white  hover:bg-transparent border-4 border-transparent rounded-2xl  transition-all duration-150 ease-in-out"
                    target="_blank" 
                    rel="noopener noreferrer"
                >
                  <img src="/svg/Tiktok-icon.svg" class="size-7" alt="Tiktok" loading='lazy'>
                </a>
              </div>
            </div>
    </div>
        <div class="text-center mt-8 text-gray-300 text-sm ">
            © {{ date('Y') }} The Legacy Trucks and Tractors Inc. All Rights Reserved.   
            <br />
            <a href="{{ '/privacy-and-policy' }}" class="text-white hover:underline mx-2" onClick={scrollUp}>Privacy Policy</a> | 
            <a href="{{ '/terms-of-use' }}" class="text-white hover:underline mx-2" onClick={scrollUp}>Terms of Use</a> | 
            <a href="{{ '/cookie-policy' }}" class="text-white hover:underline mx-2" onClick={scrollUp}>Cookie Policy</a>         
        </div>
</footer>