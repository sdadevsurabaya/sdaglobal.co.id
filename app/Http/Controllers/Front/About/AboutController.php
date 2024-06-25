<?php

namespace App\Http\Controllers\Front\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        $title = 'About Us';
        return view('front.about.about', compact('title'));
    }
}
