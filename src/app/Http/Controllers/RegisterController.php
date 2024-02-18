<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $contact = $request->only(['name', 'email', 'password']);
        return view('registerthanks');
    }
}
