<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing() {
        $title = 'SDA Global Group';
        return view('front.landing', compact('title'));
    }
}
