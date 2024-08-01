<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        $title = 'SDA Global Group';

        // $user_ip = getenv('REMOTE_ADDR');
        // $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        // $codeCountry = $geo["geoplugin_countryCode"];

        $user_ip = $_SERVER['REMOTE_ADDR'];
        $geo = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $user_ip));
        $codeCountry = $geo->geoplugin_countryCode;

        // dump($_SERVER['REMOTE_ADDR']);
        // dump(getenv('REMOTE_ADDR'));
        // dump($user_ip);
        // dump(request()->ip());
        // dump($geo);
        // dd("stop");
        // dump($codeCountry);

        if ($codeCountry != "ID") {
            $code = "langen";
        } else {
            $code = "langid";
        }

        // session()->forget('lang');

        if ($code != session()->get('lang')) {
           if (session()->get('lang') == "langen") {
                session()->put('lang', "langen");
            } else {
                session()->put('lang', "langid");
            }
        } else {
            session()->put('lang', $code);
        }

        return view('front.landing', compact('title'));
    }

    public function sessionlang(Request $request)
    {
        session()->put('lang', $request->lang);
    }
}
