<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\ContactUsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSender;
use Validator;

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

    public function reply_message(Request $request) {
        // dd($request->id);

        $validator = Validator::make(
            $request->all(),
            [
                'reply' => 'required',
            ],
            [
                'reply.required' => 'The reply message field is required.',
            ]
        );

        //check if validation fails
        if ($validator->passes()) {
            // update to db
            $data = ContactUsModel::find($request->id);
            $data->reply = $request->reply;
            $data->save();

            // send email
            $txtPesan = strip_tags($request->reply);
            $data = [
                'nama' => "SDA Global",
                'email' => "cs@sdagobal.co.id",
                'usernama' => $request->user_nama,
                'useremail' => $request->user_email,
                'phone' => "+62 822 8080 8800",
                'subject' => "jawaban kami",
                'pesan' => $txtPesan,
            ];
            $this->sendMessage($data);

            return response()->json(['message' => 'Reply message succesfully!']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    function sendMessage($data)
    {
        try {
            Mail::to($data["useremail"])->send(new EmailSender($data));
            $text = 'SUKSES';
        } catch (\Exception $e) {
            $text = 'GAGAL : ' . $e->getMessage();
        }

        // dd($text);
    }
}
