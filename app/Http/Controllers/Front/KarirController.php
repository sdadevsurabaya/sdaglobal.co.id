<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactUsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KarirController extends Controller
{
    public function career()
    {
        // date_default_timezone_set('Asia/Jakarta');
        // $today = date('Y-m-d');
        // $getLevel = DB::table('model_levels')->get();
        $title = "Career | SDA Global";

        // $res_job = DB::table('applied_job')
        //     ->leftJoin('model_levels', 'model_levels.id', '=', 'applied_job.level')
        //     ->orderBy('applied_job.id', 'desc')
        //     ->where('applied_job.end_date', '>=', $today)
        //     ->where('applied_job.status', 'Open')
        //     ->select('applied_job.*', 'model_levels.title as title_level')
        //     ->get();
        return view('front.career', compact('title'));
    }


    public function form_career()
    {
        $title = 'Form Career';
        return view('front.form_career', compact('title'));
    }


    public function search_level(Request $request)
    {
        $val_level = $request->val_level;
        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');
        $lang = $request->lang;

        $res_job = DB::table('applied_job')
            ->leftJoin('master_level', 'master_level.id', '=', 'applied_job.level')
            ->orderBy('applied_job.id', 'desc')
            ->where('applied_job.end_date', '>=', $today)
            ->where('applied_job.status', 'Open')
            ->where('applied_job.level', $val_level)
            ->select('applied_job.*', 'master_level.title as title_level')
            ->get();

        return view('showjobs', compact('res_job', 'lang'));
    }

}
