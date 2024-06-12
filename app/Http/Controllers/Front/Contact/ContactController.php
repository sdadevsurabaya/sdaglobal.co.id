<?php

namespace App\Http\Controllers\Front\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        $title = 'Our Contact';
        return view('front.contact.contact', compact('title'));
    }
}
