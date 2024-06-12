<?php

namespace App\Http\Controllers\Front\Policy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function terms() {
        $title = 'Terms & Conditions';
        return view('front.policy.terms', compact('title'));
    }
}
