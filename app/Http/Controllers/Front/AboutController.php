<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $title = 'About Us';

        $lang = session()->get('lang');
        if ($lang != "langid") {
            return view('front.about', compact('title'));
        } else {
            return view('front.id.about', compact('title'));
        }

    }
}
