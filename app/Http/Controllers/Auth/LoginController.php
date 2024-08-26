<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        $title = 'Login | SDA Global';
        return view('auth.login', compact('title'));
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('login');
        }
    }

    public function actionlogout(Request $request)
    {
        Auth::logout(); // Logout user yang sedang aktif

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect ke halaman login atau halaman lain setelah logout
        return redirect('/login');
    }
}
