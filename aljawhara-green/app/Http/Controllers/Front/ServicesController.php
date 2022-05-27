<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('front.services',['services'=>$services]);
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('front.show-service',['service'=>$service]);
    }
}