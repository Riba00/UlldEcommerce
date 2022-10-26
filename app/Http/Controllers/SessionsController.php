<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }


    public function store()
    {
        if (auth()->attempt(request(['username', 'password']))== false){

            return back()->withErrors([
                'message' => 'Invalid credentials'
            ]);
        } else{
            return redirect()->to('/');

        }
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}
