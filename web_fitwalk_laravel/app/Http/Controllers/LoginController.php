<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'login',
        ]);
    }

    public function authenticate(request $request)
    {
        $credentials = $request->validate([
            'email'=> ['required', 'email:dns'],
            'password'=> ['required', 'min:8', 'max:255'],
        ]);

        // cek sudah sesuai atau belum dengan database, kalo salah ke regenerate session
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login failed!');

    }
    
    public function logout(request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
