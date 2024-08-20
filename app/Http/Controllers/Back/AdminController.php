<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\ContactUsModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $title = 'Dashboard | SDA Global';
        return view('back.page.dashboard', compact('title'));
    }

    public function message() {
        $title = 'Message | SDA Global';
        $message = ContactUsModel::orderBy('id', 'desc')->get();
        return view('back.page.message', compact('title', 'message'));
    }

    public function read_message($id) {
        $message = ContactUsModel::find($id);

        return response()->json([
            'success' => true,
            'data'    => $message
        ]);
    }
}
