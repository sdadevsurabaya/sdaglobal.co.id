<?php

namespace App\Http\Controllers\Front;

use App\Models\Vacancies;
use App\Models\ModelLevel;
use Illuminate\Http\Request;
use App\Models\ContactUsModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class KarirController extends Controller
{
    public function career()
    {
        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');
        $levels = ModelLevel::all();
        $title = "Career | SDA Global";
        $res_job = Vacancies::where('vacancies.end_date', '>=', $today)->where('vacancies.status', 'Open')->with('level')->orderByDesc('id')->get();

        return view('front.career', compact('title', 'res_job', 'levels'));
    }

    public function search_jobs(Request $request)
    {
        $search_jobs = htmlspecialchars($request->search_jobs);
        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');
        // $lang = $request->lang;

        $res_job = Vacancies::where('vacancies.end_date', '>=', $today)->where('vacancies.status', 'Open')->where('vacancies.title', 'like', '%' . $search_jobs . '%')->with('level')->orderByDesc('id')->get();

        return view('front.showjobs', compact('res_job'));
    }

    public function search_level(Request $request)
    {
        $val_level = $request->val_level;
        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');
        // $lang = $request->lang;

        $res_job = Vacancies::where('vacancies.end_date', '>=', $today)->where('vacancies.status', 'Open')->where('vacancies.level_id', $val_level)->with('level')->orderByDesc('id')->get();

        return view('front.showjobs', compact('res_job'));
    }

}
