<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title'=>'register',
        ]);
    }

    public function store(request $request)
    {
        $validatedData = $request->validate([
            'name'=> ['required', 'max:255'],
            'username'=> ['required', 'min:4', 'max:255', 'unique:users'],
            'email'=> ['required', 'email:dns', 'unique:users'],
            'password'=> ['required', 'min:8', 'max:255'],
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'registration sucessfull, please login!');

        return redirect('/login')->with('success', 'registration sucessfull, please login!');
    }
}
