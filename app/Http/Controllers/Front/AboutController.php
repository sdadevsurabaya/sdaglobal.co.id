<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AboutController extends Controller
{
    // public function about()
    // {
    //     $title = 'About Us';

    //     $lang = session()->get('lang');
    //     if ($lang != "langid") {
    //         return view('front.about', compact('title'));
    //     } else {
    //         return view('front.id.about', compact('title'));
    //     }
    // }

    // }

    // public function about()
    // {
    //     $title = 'About Us';

    //     // Mendapatkan IP pengunjung
    //     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    //         $ip = $_SERVER['HTTP_CLIENT_IP'];
    //     } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //     } else {
    //         $ip = $_SERVER['REMOTE_ADDR'];
    //     }

    //     // Mendapatkan informasi lokasi berdasarkan IP
    //     $country = 'Unknown'; // Default value
    //     $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

    //     if ($ipdat && $ipdat->geoplugin_countryName) {
    //         $country = $ipdat->geoplugin_countryName;
    //     }

    //     // Mendapatkan bahasa dari sesi
    //     $lang = session()->get('lang');

    //     // Menampilkan halaman sesuai dengan bahasa
    //         if ($lang != "langid") {
    //             return view('front.about', compact('title', 'country'));
    //         } else {
    //             return view('front.id.about', compact('title', 'country'));
    //         }
    // }

    public function about()
    {
        $title = 'About Us';

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        $country = $ipdat->geoplugin_countryName;
        // $country = "id";
        // dd("$lang");
        $data = [];
        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
            if ($lang == 'langen') {
                return view('front.about', compact('title', 'lang'));
            } else {
                return view('front.id.about', compact('title', 'lang'));
            }
        } else {
            $lang = '';
            if ($country == "Indonesia") {
                return view('front.id.about', compact('title', 'lang'));
            } else {
                return view('front.about', compact('title', 'lang'));
            }
            dd("$lang");
        }
    }
}
