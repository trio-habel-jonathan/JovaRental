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
        return view('contact-us');
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

        // Retrieve Mailjet credentials and validate
        $apiKey = config('services.mailjet.api_key');
        $secretKey = config('services.mailjet.secret_key');

        if (empty($apiKey) || empty($secretKey)) {
            \Log::error('Mailjet credentials are missing. API Key: ' . $apiKey . ', Secret Key: ' . $secretKey);
            return redirect()->route('contact.form')->with('error', 'Email service configuration error. Please contact support.');
        }

        // Initialize Mailjet client
        $mj = new Client(
            $apiKey,
            $secretKey,
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

        // Ensure the From email is verified in Mailjet
        $fromEmail = config('mail.from.address', 'venlisiaputri21@gmail.com');
        $supportEmail = config('app.support_email', 'venlisiaputri21@gmail.com'); // Use config instead of env()

        // Prepare the email payload
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => $fromEmail,
                        'Name' => config('mail.from.name', 'JovaRental'),
                    ],
                    'To' => [
                        [
                            'Email' => $supportEmail,
                            'Name' => 'Support Team',
                        ],
                    ],
                    'ReplyTo' => [  // Add Reply-To header for better email handling
                        'Email' => $validated['email'],
                        'Name' => $validated['name'],
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
            \Log::error('Mailjet email sending failed: ', $response->getData());
            return redirect()->route('contact.form')->with('error', 'Failed to send your message. Please try again later.');
        }
    }
}