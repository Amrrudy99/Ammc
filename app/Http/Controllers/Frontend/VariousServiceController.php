<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class VariousServiceController extends Controller
{
    public function index()
    {
        $service = Service::where('name','خدمات متنوعة')->first();
        return view('frontend.variousservice',compact('service'));
    }
}
