<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if($user) {
            if($user->role == 'user'){
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect()->intended('/biodata');
                }
            }
            elseif($user->role == 'admin'){
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect()->intended('/dashboard');
                }
            }
        }
        else{
        return back()->with('loginError', 'Login Gagal. Harap Cek kembali email dan password anda!');
        }


        return back()->with('loginError', 'Login Gagal. Harap Cek kembali email dan password anda!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
