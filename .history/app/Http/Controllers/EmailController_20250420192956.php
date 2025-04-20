<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mailjet\Client;
use Mailjet\Resources;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'to_email' => 'required|email',
            'subject' => 'required|string',
            'body' => 'required|string',
        ]);

        // Initialize Mailjet client with API key and secret
        $mj = new Client(
            config('services.mailjet.api_key'),
            config('services.mailjet.secret_key'),
            true,
            ['version' => 'v3.1']
        );

        // Prepare the email payload
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => 'your-authenticated-email@example.com', // Replace with your verified sender email
                        'Name' => 'Your Name or App Name',
                    ],
                    'To' => [
                        [
                            'Email' => $request->to_email,
                            'Name' => 'Recipient Name', // Optional
                        ],
                    ],
                    'Subject' => $request->subject,
                    'TextPart' => strip_tags($request->body),
                    'HTMLPart' => $request->body, // HTML content
                ],
            ],
        ];

        // Send the email
        $response = $mj->post(Resources::$Email, ['body' => $body]);

        // Check if the email was sent successfully
        if ($response->success()) {
            return response()->json(['message' => 'Email sent successfully!'], 200);
        } else {
            return response()->json(['error' => 'Failed to send email.'], 500);
        }
    }
}