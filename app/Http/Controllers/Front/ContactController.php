<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactUsModel;
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
            'pesan' => 'required',
        ], [
            'nama.required' => 'The Name field is required',
            'email.required' => 'The Email Address field is required.',
            'email.email' => 'Please enter a valid Email Address.',
            'phone.required' => 'The Contact Number field is required.',
            'pesan.required' => 'Please enter the Message field.',
        ]);

        ContactUsModel::create($validateData);
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
