@extends('app')

@section('title', 'Privacy and Policy || The Legacy Trucks and Tractors')
@section('meta_description', 'The Legacy Trucks And Tractors INC. privacy policies.')

@section('content')
            <div class="flex flex-col items-center justify-center overflow-hidden p-10 lg:px-24 ">
                <h1 class="text-center lg:text-[52px] text-5xl font-bold leading-normal mb-6">
                    Privacy Policy
                </h1>
                <div class="w-full max-w-3xl">
                {{-- Effective Date --}}
                    <x-effective_date/>

                    {{-- {/* Information We Collect */} --}}
                    <h2 class="text-2xl font-semibold mb-2">1. Information We Collect</h2>
                    <p class="mb-6 text-base">
                        We may collect and process the following types of information:
                    </p>
                    <ul class="list-disc list-inside space-y-2 mb-6 text-base pl-10">
                        <li><strong>Personal Information:</strong> Name, email, phone number, and other contact details you provide.</li>
                        <li><strong>Technical Data:</strong> IP address, browser type, device information, and website usage statistics.</li>
                        <li><strong>Cookies & Tracking Technologies:</strong> Data collected via cookies to enhance your experience.</li>
                    </ul>

                    {{-- {/* How We Use Your Information */} --}}
                    <h2 class="text-2xl font-semibold mb-2">2. How We Use Your Information</h2>
                    <p class="mb-6 text-base">We use your information to:</p>
                    <ul class="list-disc list-inside space-y-2 mb-6 text-base pl-10">
                        <li>Provide and improve our services.</li>
                        <li>Respond to inquiries and support requests.</li>
                        <li>Analyze website traffic and user behavior.</li>
                        <li>Send updates, promotions, or newsletters (if opted in).</li>
                        <li>Comply with legal obligations and prevent fraud.</li>
                    </ul>

                    {{-- {/* How We Protect Your Information */} --}}
                    <h2 class="text-2xl font-semibold mb-2">3. How We Protect Your Information</h2>
                    <p class="mb-6 text-base">
                    We implement security measures to protect your data from unauthorized access, misuse, or disclosure.
                    However, no online transmission is 100% secure, and we cannot guarantee absolute security.
                    </p>

                    {{-- {/* Sharing Your Information */} --}}
                    <h2 class="text-2xl font-semibold mb-2">4. Sharing Your Information</h2>
                    <p class="mb-6 text-base">
                    We do <strong>not</strong> sell, trade, or rent your data. However, we may share your data with:
                    </p>
                    <ul class="list-disc list-inside space-y-2 mb-6 text-base pl-10">
                        <li><strong>Service Providers:</strong> Third-party companies that help operate our website and services.</li>
                        <li><strong>Legal Authorities:</strong> If required by law or to protect our legal rights.</li>
                    </ul>

                    {{-- {/* Your Rights & Choices */} --}}
                    <h2 class="text-2xl font-semibold mb-2">5. Your Rights & Choices</h2>
                    <p class="mb-6 text-base">You have the right to:</p>
                    <ul class="list-disc list-inside space-y-2 mb-6 text-base pl-10">
                        <li>Request access to your personal data.</li>
                        <li>Correct inaccuracies in your data.</li>
                        <li>Request data deletion (subject to legal requirements).</li>
                        <li>Opt out of marketing communications.</li>
                        <li>Manage cookies through your browser settings.</li>
                    </ul>

                    {{-- {/* Cookies & Tracking */} --}}
                    <h2 class="text-2xl font-semibold mb-2">6. Cookies & Tracking Technologies</h2>
                    <p class="mb-6 text-base">
                    For more details, please read our
                    <a href="{{ '/cookie-policy' }}" class="text-indigo-500 hover:underline">
                        Cookie Policy.
                    </a>
                    </p>
{{-- 
                    {/* Changes to Privacy Policy */} --}}
                    <h2 class="text-2xl font-semibold mb-2">7. Changes to This Privacy Policy</h2>
                    <p class="mb-6 text-base">
                        We may update this Privacy Policy from time to time. Any changes will be posted here with an updated effective date.
                    </p>

                    {{-- {/* Contact Us */} --}}
                    <h2 class="text-2xl font-semibold mb-2">8. Contact Us</h2>
                    <p class="text-base">
                        If you have any questions about our Privacy Policy, please contact us at:<br/>
                    </p>
                    <p class="text-base pl-10">
                        <strong>Email: </strong>
                        <span class='text-indigo-500 hover:underline'><x-email /></span>
                    </p>
                    
                    <p class="mb-20 text-base pl-10">
                        <strong>Address:</strong><span class='text-indigo-500 hover:underline'><x-address /></span>
                    </p>  
                </div>
            </div>
@endsection