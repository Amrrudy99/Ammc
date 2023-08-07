<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\News;
use App\Models\Slider;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $sliders = Slider::where('published',1)->get();
        $about_us = AboutUs::first();
        $news = News::where('published',1)->orderBy('created_at','desc')->take(10)->get();
        $contact = Contact::all();
        return view('frontend.index',compact('sliders', 'about_us', 'news' , 'contact'));
    }
}
