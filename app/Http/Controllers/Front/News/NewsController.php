<?php

namespace App\Http\Controllers\Front\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news() {
        $title = 'News & Events';
        return view('front.news.news', compact('title'));
    }
}
