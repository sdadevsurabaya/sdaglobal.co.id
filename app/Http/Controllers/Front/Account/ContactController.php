<?php

namespace App\Http\Controllers\Front\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $title = 'Contact Us';
        return view('front.contact', compact('title'));
    }
}
