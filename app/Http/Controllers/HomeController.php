<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fetured_products= collect([
            [
                'id' => 1,
                'name' => 'Excavator',
                'desc' => 'Built to perform, the Weichai WE210E2 handles tough excavation with ease.',
                'image' => '/images/Excavator.png',
                'link' => '/excavator'
                ],
            [
                'id' => 2,
                'name' => 'Road Roller',
                'desc' => 'The Weichai WR22H-C6 is built for robust, efficient road compaction.',
                'image' => '/images/RoadRoller.png',
                'link' => '/road-roller'
                ],
            [
                'id' => 3,
                'name' => 'Bulldozer',
                'desc' => 'Built tough, the WSD320 handles heavy-duty earthmoving with ease.',
                'image' => '/images/Bulldozer.png',
                'link' => '/bulldozer'
                ],
            [
                'id' => 3,
                'name' => 'Kva Generator 15-5850',
                'desc' => 'Engineered for dependable, high-performance industrial power.',
                'image' => '/images/Kva_generator3.png',
                'link' => '/powerquip-15-5850-kva'
                ],
            [
                'id' => 4,
                'name' => 'Forland Cargo Truck 14 Realft',
                'desc' => 'Efficient, durable, cargo-ready? Forland Cargo Truck 14 Realft can do it all!',
                'image' => '/images/Forland-Cargo-Truck-14-Realft.png',
                'link' => '/cargo-truck-14-realft'
                ],
            [
                'id' => 5,
                'name' => 'Shacman Dump Truck H3000',
                'desc' => 'Built for strength, the Shacman H3000 dominates every load.',
                'image' => '/images/Shacman_Dump_Truck_H3000.png',
                'link' => '/shacman-dump-truck-h3000'
                ],
        ]);

       return view('pages.home', [
        'fetured_products' => $fetured_products
       ]);
    }


    public function store(Request $request)
    {
        $key = 'contact-form:' . $request->ip();

        // 🚫 Check if too many attempts
        if (RateLimiter::tooManyAttempts($key, 3)) {
            return back()->with('error', 'Too many attempts. Please try again later.');
        }

        // ⏱️ Count this attempt (decays in 60 seconds)
        RateLimiter::hit($key, 3600);

        // 🤖 Honeypot
        if ($request->filled('website')) {
            return back();
        }

        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'message' => 'required',
            'g-recaptcha-response' => 'required',
        ]);

        // 🤖 reCAPTCHA verification
        $captcha = $request->input('g-recaptcha-response');

        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $captcha,
                'remoteip' => $request->ip(),
            ]
        );

        if (!($response->json('success') ?? false)) {
            return back()->with('error', 'reCAPTCHA verification failed.');
        }

        try {
            Mail::to('info@legacytrucks.com.ph')
                ->send(new ContactFormMail($data));

            return back()->with('success', 'Message sent successfully!');

        } catch (\Exception) {
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }   
}
