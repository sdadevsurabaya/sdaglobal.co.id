<?php

namespace App\Http\Controllers\Front\Policy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function policy() {
        $title = 'Privacy Policy';
        return view('front.policy.policy', compact('title'));
    }
}
