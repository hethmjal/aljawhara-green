<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $services = Service::latest()->take(3)->get();
        return view('front.index',['services'=>$services]);
    }

    public function about()
    {
        return view('front.about');
    }
}