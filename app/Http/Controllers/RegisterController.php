<?php

namespace App\Http\Controllers;


use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $this ->validate(request(),[
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create(request(['username','email','password']));
        auth()->login($user);
        return redirect()->to('/');

    }
}
