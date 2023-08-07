<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ArtServiceController extends Controller
{
    public function index()
    {
        $service = Service::where('name','الخدمات الفنية')->first();
        return view('frontend.artservice', compact('service'));
    }
}
