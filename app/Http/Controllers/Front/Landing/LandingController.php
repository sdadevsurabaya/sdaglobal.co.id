<?php

namespace App\Http\Controllers\Front\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing() {
        $title = 'Home';
        return view('front.landing.landing', compact('title'));
    }
}
