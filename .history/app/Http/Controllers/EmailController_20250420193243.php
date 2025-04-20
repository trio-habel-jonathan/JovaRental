<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mailjet\Client;
use Mailjet\Resources;

class EmailController extends Controller
{
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

        // Initialize Mailjet client
        $mj = new Client(
            config('services.mailjet.api_key'),
            config('services.mailjet.secret_key'),
            true,
            ['version' => 'v3.1']
        );

        // Prepare the email content
        $emailBody = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$validated['name']}</p>
            <p><strong>Email:</strong> {$validated['email']}</p>
            <p><strong>Phone Number:</strong> {$validated['no_hp']}</p>
            <p><strong>Message:</strong><br>{$validated['messages']}</p>
        ";

        // Prepare the email payload
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => config('mail.from.address', 'your-authenticated-email@yourdomain.com'), // Replace with your verified sender email
                        'Name' => config('mail.from.name', 'Your App Name'),
                    ],
                    'To' => [
                        [
                            'Email' => env('SUPPORT_EMAIL', 'support@yourdomain.com'), // Replace with your support email
                            'Name' => 'Support Team',
                        ],
                    ],
                    'Subject' => 'New Contact Form Submission from ' . $validated['name'],
                    'TextPart' => strip_tags($emailBody),
                    'HTMLPart' => $emailBody,
                ],
            ],
        ];

        // Send the email
        $response = $mj->post(Resources::$Email, ['body' => $body]);

        // Check if the email was sent successfully
        if ($response->success()) {
            return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully!');
        } else {
            return redirect()->route('contact.form')->with('error', 'Failed to send your message. Please try again later.');
        }
    }
}