<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function serviceDetails()
    {
        return view('front.service-details');
    }

    public function portfolioDetails()
    {
        return view('front.portfolio-details');
    }
}
