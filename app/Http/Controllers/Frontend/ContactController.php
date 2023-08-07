<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
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

    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->all());
        alert('تم أرسال رسالتك وسيتم التواصل معك','','success');
        return redirect()->route('frontend.contact');
    }
}



