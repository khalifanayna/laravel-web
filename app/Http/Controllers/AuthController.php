<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

=======
use Illuminate\Support\Facades\Hash;
use App\Models\User;
>>>>>>> d7d3480f9ae784cc4d04e6381a4f004922396251
use Illuminate\Http\Request;

class AuthController extends Controller
{
<<<<<<< HEAD
    //
=======


    public function index()
    {
        return view('login-form');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan.');
        }

        // jika password salah
        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Password anda salah ');
        }

        // jika berhasil login
        // (biasanya set session dulu)
        session(['user_id' => $user->id]);

        return redirect()->route('dashboard');
    }
>>>>>>> d7d3480f9ae784cc4d04e6381a4f004922396251
}
