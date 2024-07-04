<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function industries()
    {
        $title = 'Industries';
        return view('front.industries', compact('title'));
    }
}
