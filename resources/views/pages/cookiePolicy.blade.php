@extends('app')

@section('title', 'Cookie Policy || The Legacy Trucks and Tractors')
@section('meta_description', 'The Legacy Trucks And Tractors INC. cookie policies.')

@section('content')
        <div class="flex flex-col items-center justify-center overflow-hidden p-10 lg:px-24 ">
            <h1 class="text-center lg:text-[52px] text-5xl font-bold leading-normal mb-6">
                Cookie Policy
            </h1>

            <div class="w-full max-w-3xl">
                {{-- {/* Effective date */} --}}
                <x-effective_date />    

                {{-- {/* What Are Cookies */}--}}
                <h2 class="text-2xl font-semibold mb-2">1. What Are Cookies?</h2>
                <p class="mb-6 text-lg">
                    Cookies are small text files stored on your device (computer, tablet, or smartphone) when you visit a website. 
                    They help websites recognize your device and remember your preferences, 
                    making your browsing experience more seamless and personalized.
                </p>

                {{-- {/* How We Use Cookies */} --}}
                <h2 class="text-2xl font-semibold mb-2">2. How We Use Cookies</h2>
                <p class="mb-6 text-lg">We use cookies for various purposes, including:</p>
                <ul class="list-disc list-inside space-y-2 mb-6 text-lg pl-10">
                    <li>
                        <strong>Essential Cookies:</strong> 
                        Necessary for website functionality, 
                        such as enabling navigation and security features.
                    </li>
                    <li>
                        <strong>Performance Cookies:</strong> 
                        Help us analyze website traffic and improve functionality by collecting anonymous usage data.
                    </li>
                    <li>
                        <strong>Functional Cookies:</strong> 
                        Remember your preferences (such as language and region) to provide a customized experience.
                    </li>
                    <li>
                        <strong>Marketing & Advertising Cookies:</strong> 
                        Used to deliver relevant ads and measure the effectiveness of our advertising campaigns.
                    </li>
                </ul>

                {{-- {/* Managing Cookie Preferences */} --}}
                <h2 class="text-2xl font-semibold mb-2">3. Managing Your Cookie Preferences</h2>
                <p class="mb-6 text-lg">
                    You can control or disable cookies at any time by adjusting your browser settings. 
                    However, please note that disabling certain cookies may affect website functionality and limit your experience.
                </p>
                <p class="mb-6 text-lg">Most web browsers allow you to:</p>
                <ul class="list-disc list-inside space-y-2 mb-6 text-lg pl-10">
                    <li>View stored cookies</li>
                    <li>Delete cookies</li>
                    <li>Block or allow cookies from specific websites</li>
                    <li>Set preferences for how cookies are handled</li>
                </ul>
                <p class="text-lg mb-6">
                    To manage cookies, refer to your browser’s help section or visit 
                <a 
                    href="https://www.allaboutcookies.org" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="text-indigo-500 hover:underline ml-1"
                >
                    www.allaboutcookies.org
                </a> for more details.
                </p>

                {{-- {/* Third-Party Cookies */} --}}
                <h2 class="text-2xl font-semibold mb-2">4. Third-Party Cookies</h2>
                <p class="mb-6 text-lg">
                    Some cookies on our website may be placed by third-party services, 
                    such as analytics providers (Google Analytics) or social media platforms. 
                    These third parties may collect data about your browsing habits. 
                    Please review their respective privacy policies for more information on how they handle cookies.
                </p>

                {{-- {/* Updates to This Cookie Policy */} --}}
                <h2 class="text-2xl font-semibold mb-2">5. Updates to This Cookie Policy</h2>
                <p class="mb-6 text-lg">
                    We may update this Cookie Policy from time to time to reflect changes in technology, 
                    legal requirements, or business operations. 
                    Any updates will be posted on this page with the "Effective Date" above.
                </p>    
                
                 {{-- {/* Contact Us */} --}}
                 <h2 class="text-2xl font-semibold mb-2">6. Contact Us</h2>
                <p class="text-lg ">
                    If you have any questions about our Cookie Policy, please contact us at:<br/>
                    <span class='pl-10'><strong>Email: </strong>
                        <span class='text-indigo-500 hover:underline'><x-email /></span>
                    </span>                     
                </p>      
                <p class="mb-20 text-lg pl-10">
                    <strong>Address:</strong> <x-address />
                </p>                       
            </div>
        </div>
@endsection