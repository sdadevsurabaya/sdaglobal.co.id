<?php

namespace App\Http\Controllers\Front\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadershipContoller extends Controller
{
    public function leadership() {
        $title = 'Leadership';
        return view('front.about.leadership', compact('title'));
    }
}
