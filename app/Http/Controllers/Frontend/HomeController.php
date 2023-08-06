<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $sliders = Slider::where('published',1)->get();

        return view('frontend.index',compact('sliders'));
    }
}