<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function cek(Request $request)
    {
        $cek = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($cek)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/index');
        } else {
            Session::flash('status', 'Failed');
            Session::flash('message', 'Email atau password anda salah!');
            return redirect('/login');
        }
        
    }
    public function logout(Request $request)
    {
        
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/index');
    }
}
