<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use GeoIP;

class LandingController extends Controller
{
    public function landing(Request $request)
    {
        $title = 'SDA Global | Solution For Every Industries';

        // $user_ip = getenv('REMOTE_ADDR');
        // $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        // $codeCountry = $geo["geoplugin_countryCode"];

        $user_ip = $request->ip();
        // $user_ip = $_SERVER['REMOTE_ADDR'];
        // $user_ip = "89.187.163.154";
        // $user_ip = "202.6.227.14";
        // $user_ip = "51.89.251.208";
        // $user_ip = "37.9.35.23";
        // $user_ip = "176.31.208.88";
        // $user_ip = "66.102.0.0";
        // $user_ip = "127.0.0.1";

        $geo = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $user_ip));
        // $codeCountry = $geo->geoplugin_countryCode;
        $codeCountry = "EN";

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

        // if ($code != session()->get('lang')) {
        //    if (session()->get('lang') == "langen") {
        //         session()->put('lang', "langen");
        //     } else {
        //         session()->put('lang', "langid");
        //     }
        // } else {
        //     session()->put('lang', $code);
        // }

        if (session()->get('lang') != null ) {
            if ($code != session()->get('lang')) {
                if (session()->get('lang') == "langen") {
                    session()->put('lang', "langen");
                } else {
                    session()->put('lang', "langid");
                }
            } else {
                session()->put('lang', $code);
            }
        } else {
            session()->put('lang', $code);
        }


        return view('front.landing', compact('title'));
    }

    public function userip(Request $request)
    {
        $user_ip = $request->userip;
        $geo = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $user_ip));
        $countryCode = $geo->geoplugin_countryCode;

        // session()->put('lang', $user_ip);
        return $countryCode;
        // return response()->json(['data' => [$user_ip, $geo->geoplugin_countryCode]]);
    }

    public function sessionlang(Request $request)
    {
        session()->put('lang', $request->lang);
    }
}
