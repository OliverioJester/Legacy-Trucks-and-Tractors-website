@extends('app')

@section('title', 'Terms of Use || The Legacy Trucks and Tractors')
@section('meta_description', 'The Legacy Trucks And Tractors INC. terms of use.')

@section('content')
        <div class="flex flex-col items-center justify-center overflow-hidden p-10 lg:px-24 ">
          <h1 class="text-center lg:text-[52px] text-5xl font-bold leading-normal mb-6">
              Terms of Use
          </h1>

          <div class="w-full max-w-3xl">
            {{-- {/* Effective date */} --}}
            <x-effective_date />  

            {{-- {/* Acceptance of Terms */} --}}
            <h2 class="text-2xl font-semibold mb-2">1. Acceptance of Terms</h2>
            <p class="mb-6 text-base">
              By accessing or using this website, you acknowledge that you have read, understood, 
              and agree to be bound by these Terms of Use. If you do not agree, 
              please do not use our website.
            </p>

            {{-- {/* Modifications */} --}}
            <h2 class="text-2xl font-semibold mb-2">2. Changes to Terms</h2>
            <p class="mb-6 text-base">
              We reserve the right to update or modify these Terms of Use at any time without prior notice. 
              Any changes will be effective immediately upon posting on this page.
            </p>

            {{-- {/* User Responsibilities */} --}}
            <h2 class="text-2xl font-semibold mb-2">3. User Responsibilities</h2>
            <p class="mb-6 text-base">By using our website, you agree to:</p>
            <ul class="list-disc list-inside space-y-2 mb-6 text-base pl-10">
              <li>Use the website for lawful purposes only.</li>
              <li>Not engage in any activity that disrupts or interferes with website functionality.</li>
              <li>Not attempt to gain unauthorized access to our systems.</li>
              <li>Respect intellectual property rights and copyright laws.</li>
            </ul>

            {{-- {/* Intellectual Property */} --}}
            <h2 class="text-2xl font-semibold mb-2">4. Intellectual Property Rights</h2>
            <p class="mb-6 text-base">
              All content, including text, images, logos, and graphics on this website, is the property of
              <strong>The Legacy Trucks and Tractors Inc.</strong> and is protected by copyright and trademark laws. 
              You may not use or distribute any content without our written permission.
            </p>

            {{-- {/* Limitation of Liability */} --}}
            <h2 class="text-2xl font-semibold mb-2">5. Limitation of Liability</h2>
            <p class="mb-6 text-base">
              We are not responsible for any direct, indirect, incidental, 
              or consequential damages resulting from your use of our website. 
              We do not guarantee that our website will always be available, secure, or error-free.
            </p>

            {{-- {/* External Links */} --}}
            <h2 class="text-2xl font-semibold mb-2">6. Third-Party Links</h2>
            <p class="mb-6 text-base">
              Our website may contain links to third-party websites. 
              We do not control or endorse the content of these websites and are not responsible for their practices.
            </p>

            {{-- {/* Termination */} --}}
            <h2 class="text-2xl font-semibold mb-2">7. Termination</h2>
            <p class="mb-6 text-base">
              We reserve the right to suspend or terminate your access to our website at any time for any reason, 
              including violation of these Terms of Use.
            </p>

            {{-- {/* Governing Law */} --}}
            <h2 class="text-2xl font-semibold mb-2">8. Governing Law</h2>
            <p class="mb-6 text-base">
              These Terms of Use are governed by and construed in accordance with the laws of [Your Country/State]. 
              Any disputes arising from these terms shall be resolved in the appropriate legal jurisdiction.
            </p>  

            {{-- {/* Contact Us */} --}}
            <h2 class="text-2xl font-semibold mb-2">9. Contact Us</h2>
            <p class="text-base">
                If you have any questions regarding these Terms of Use, please contact us at:<br/>
            </p>
            <p class="text-base pl-10">
                <strong>Email: </strong>
                <span class='text-indigo-500 hover:underline'><x-email /></span>
            </p>
            
            <p class="mb-20 text-base pl-10">
                <strong>Address:</strong>
                <span class='text-indigo-500 hover:underline'><x-address /></span>
            </p>                    
          </div>
        </div> 
@endsection