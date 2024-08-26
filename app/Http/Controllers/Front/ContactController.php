<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactUsModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSender;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $title = 'Contact Us';
        return view('front.contact', compact('title'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'subject' => 'required',
            'pesan' => 'required',
        ], [
            'nama.required' => 'The Name field is required',
            'email.required' => 'The Email Address field is required.',
            'email.email' => 'Please enter a valid Email Address.',
            'phone.required' => 'The Contact Number field is required.',
            'subject.required' => 'Please enter the Email Subject field.',
            'pesan.required' => 'Please enter the Message field.',
        ]);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'usernama' => null,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'pesan' => $request->pesan,
        ];

        ContactUsModel::create($validateData);
        $this->sendMessage($data);
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    function sendMessage($data)
    {
        // $subjectmail = 'New Message';
        // $isimail = $message;

        // $bodymail = [
        //     'mailtittle' => $email.' - New Message',
        //     'mailbody' => $isimail
        // ];
        // $bccmail = null;

        try {
            Mail::to('andrik.suprayitno@gmail.com')->send(new EmailSender($data));
            $text = 'SUKSES';
        } catch (\Exception $e) {
            $text = 'GAGAL : ' . $e->getMessage();
        }

        // dd($text);
    }
}
