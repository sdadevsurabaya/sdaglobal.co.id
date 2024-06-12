<?php

namespace App\Http\Controllers\Front\Careers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function careers() {
        $title = 'Join Our Team';
        return view('front.careers.careers', compact('title'));
    }
}
