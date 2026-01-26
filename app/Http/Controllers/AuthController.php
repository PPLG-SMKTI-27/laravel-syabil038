<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // DATA LOGIN DUMMY (SEOLAH-OLAH DARI DATABASE)
        $emailBenar = 'seven@gmail.com';
        $passwordBenar = 'seven7';

        // CEK LOGIN
        if (
            $request->email === $emailBenar &&
            $request->password === $passwordBenar
        ) {
            session([
                'login' => true,
                'nama' => 'Syabil'
            ]);

            return redirect('/')->with('success', 'Berhasil login');
        }

        // JIKA SALAH
        return back()->with('error', 'Email atau password salah');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/')->with('success', 'Berhasil logout');
    }
}
