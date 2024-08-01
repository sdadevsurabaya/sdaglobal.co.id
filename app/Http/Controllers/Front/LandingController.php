<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        $title = 'SDA Global Group';
        $user_ip = getenv('REMOTE_ADDR');
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        $codeCountry = $geo["geoplugin_countryCode"];

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
        // session()->forget('lang');
        // dump(session()->get('lang'));
        // dump(session()->get('langen'));
        // dump(session()->get('langid'));
        // return response()->json([
        //     'data'    => $request->lang
        // ]);

    }
}
