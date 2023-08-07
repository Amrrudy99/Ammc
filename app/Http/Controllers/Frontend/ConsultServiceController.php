<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ConsultServiceController extends Controller
{
    public function index()
    {
        $service = Service::where('name','الإستشارات ودراسات الجدوى')->first();
        return view('frontend.consultservice', compact('service'));
    }
}
