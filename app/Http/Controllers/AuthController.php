<?php

namespace App\Http\Controllers;

use App\Models\User; // Digunakan jika Anda perlu memanipulasi model User, meskipun tidak langsung di kode ini
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // 1. Menampilkan Halaman Login
    public function index()
    {
        return view('auth.login');
    }

    // 2. Memproses Login
    public function login(Request $request)
    {
        $input = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($input)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // Arahkan User Biasa
        }

        // Jika Login Gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    
    // 3. Proses Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}