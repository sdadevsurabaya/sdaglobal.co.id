<?php

namespace App\Http\Controllers\Front\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function business() {
        $title = 'Our Business';
        return view('front.business.business', compact('title'));
    }
}
