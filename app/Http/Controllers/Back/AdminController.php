<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $title = 'Dashboard | SDA Global';
        return view('back.page.dashboard', compact('title'));
    }
}
