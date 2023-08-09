<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index()
    {   
        $photos = AboutUs::with('media')->get();
        // return $About ; 
        return view('frontend.photo-gallery' ,  compact('photos'));    
    }
}
