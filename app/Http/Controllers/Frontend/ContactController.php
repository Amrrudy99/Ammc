<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\AboutUs;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $about_us = AboutUs::first();
        $contact = Contact::all();
        return view('frontend.contact-us', compact('about_us','contact'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'subject' => 'required',
            'message' => 'required|max:255',
        ]);

        
        $message = new Contact($validatedData);
        $message->save();

        // Add a success flash message (assuming you're using Laravel's built-in flash messages)
        Alert::success('success', 'تم أرسال رسالتك وسيتم التواصل معك');

        return redirect()->route('frontend.contact'); // Redirect to the contact page
    }
}



