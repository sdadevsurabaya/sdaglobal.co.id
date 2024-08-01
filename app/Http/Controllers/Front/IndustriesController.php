<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function industries()
    {
        $title = 'Industries';

        $lang = session()->get('lang');
        if ($lang != "langid") {
            return view('front.industries', compact('title'));
        } else {
            return view('front.id.industries', compact('title'));
        }
    }
}
