<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class LawServiceController extends Controller
{
    
    public function index()
    {
        // all services 
        $services = Service::all();
        return $services ; 
        // single service
        $service = Service::where('name','Amanda Haynes')->first(); 
        // return $service ;
        return view('frontend.lawservice', compact('service'));    
    }
}
