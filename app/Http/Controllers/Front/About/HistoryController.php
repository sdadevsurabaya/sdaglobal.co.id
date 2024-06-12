<?php

namespace App\Http\Controllers\Front\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function history() {
        $title = 'History';
        return view('front.about.history', compact('title'));
    }
}
