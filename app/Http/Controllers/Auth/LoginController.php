<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function create()
    {
        return view('auth.login'); // Pastikan Anda memiliki view login
    }

    // Menangani login pengguna
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Cek kredensial
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect ke halaman /home setelah login berhasil
            return redirect()->intended('/home')->with('success', 'Selamat datang!');
        }

        // Jika login gagal
        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    // Menangani logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Anda telah berhasil logout.');
    }
}
