<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class RegisterController extends Controller
{
    public function register()
    {
        $title = 'Register | SDA Global';
        return view('auth.register', compact('title'));
    }

    public function actionregister(Request $request)
    {
        $messages = [
            // 'required' => 'Tidak boleh kosong',
            'min' => 'Password minimal 6 karakter',
            'max' => 'Attribute harus diisi maksimal :max karakter ya cuy!!!',
            'same' => 'Password harus sama',
            'required_with' => 'Password harus sama',
            'email' => 'Harus format email',
        ];

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required|min:6'
        ], $messages);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => $request->email_verified_at ?? now(),
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'active' => 1,
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif, silahkan Login menggunakan username dan password.');
        return redirect()->route('login');
    }
}
