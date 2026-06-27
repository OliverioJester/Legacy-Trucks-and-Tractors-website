<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.contact");
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



