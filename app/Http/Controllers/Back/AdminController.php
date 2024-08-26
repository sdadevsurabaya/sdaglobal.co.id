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

        date_default_timezone_set('Asia/Jakarta');
        $dateNow = date('Y-m-d');
        $timeNow = date('H:i:s');
        $dateBaca = $dateNow. " " .$timeNow;

        if (empty($message->sudah_baca)) {
            $data = [
                'sudah_baca' => $dateBaca,
            ];
        } else {
            $data = [];
        }

        $message->update($data);

        return response()->json([
            'success' => true,
            'data'    => $message
        ]);
    }
}
