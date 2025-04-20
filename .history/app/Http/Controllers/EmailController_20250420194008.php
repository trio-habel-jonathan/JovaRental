<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mailjet\Client;
use Mailjet\Resources;

class EmailController extends Controller

    /**
     * Display the contact form.
     *
     * @return \Illuminate\View\View
     */
    public function showContactForm()
    {
        return view('contact');
    }

    /**
     * Handle the form submission and send an email via Mailjet.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendEmail(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:20',
            'messages' => 'required|string',
        ]);
    
        // Debug the configuration values
        \Log::info('Mailjet API Key: ' . config('services.mailjet.api_key'));
        \Log::info('Mailjet Secret Key: ' . config('services.mailjet.secret_key'));
        // Alternatively, use dd() to inspect the values
        // dd(config('services.mailjet.api_key'), config('services.mailjet.secret_key'));
    
        // Initialize Mailjet client
        $mj = new Client(
            config('services.mailjet.api_key'),
            config('services.mailjet.secret_key'),
            true,
            ['version' => 'v3.1']
        );
}