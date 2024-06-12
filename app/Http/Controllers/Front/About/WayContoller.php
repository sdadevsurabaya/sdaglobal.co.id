<?php

namespace App\Http\Controllers\Front\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WayContoller extends Controller
{
    public function way() {
        $title = 'The SDA Way';
        return view('front.about.way', compact('title'));
    }
}
