<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactUsModel;
use Illuminate\Http\Request;

class KarirController extends Controller
{
    public function career()
    {
        $title = 'Career';
        return view('front.career', compact('title'));
    }

}
