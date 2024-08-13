<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function industries()
    {
        $title = 'Industries';

        $lang = session()->get('lang');
        if ($lang != "langid") {
            return view('front.industries', compact('title'));
        } else {
            return view('front.id.industries', compact('title'));
        }
    }

    // {
    //     $title = 'Industries';

    //     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    //         $ip = $_SERVER['HTTP_CLIENT_IP'];
    //     } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //     } else {
    //         $ip = $_SERVER['REMOTE_ADDR'];
    //     }
    //     $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
    //     $country = $ipdat->geoplugin_countryName;
    //     // $country = "id";
    //     // dd("$lang");
    //     $data = [];
    //     if (isset($_GET['lang'])) {
    //         $lang = $_GET['lang'];
    //         if ($lang == 'langen') {
    //             return view('front.industries', compact('title', 'lang'));
    //         } else {
    //             return view('front.id.industries', compact('title', 'lang'));
    //         }
    //     } else {
    //         $lang = '';
    //         if ($country == "Indonesia") {
    //             return view('front.id.industries', compact('title', 'lang'));
    //         } else {
    //             return view('front.industries', compact('title', 'lang'));
    //         }
    //         dd("$lang");
    //     }
    // }
}
