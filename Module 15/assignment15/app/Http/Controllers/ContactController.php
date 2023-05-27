<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Process the form submission and send an email
        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $message = $validatedData['message'];

        // Example code to send email
        // Replace with your own logic to send the email

        // Assuming you have configured the mail settings correctly
        // in your Laravel application
        Mail::to('your-email@example.com')->send(new ContactFormMail($name, $email, $message));

        // Redirect the user after form submission
        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}
