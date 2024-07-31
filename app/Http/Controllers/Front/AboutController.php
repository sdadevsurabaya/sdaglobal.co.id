<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $title = 'About Us';

        $user_ip = getenv('REMOTE_ADDR');
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        $code = $geo["geoplugin_countryCode"];
        // $code = "";

        if ($code != "ID") {
            return view('front.about', compact('title'));
        } else {
            return view('front.id.about', compact('title'));
        }

    }
}
