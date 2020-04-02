<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|email|max:225',
            'username' => 'required|unique:users|alpha_dash|max:20',
            'password' => 'required|unique:users|min:6',
            'first_name' => 'max:100',
            'last_name' => 'max:100',
            'city' => 'max:100',
            'country' => 'max:100',
            'gender' => 'max:100',
        ]);
        User::create([
           'email' => $request->input('email'),
           'username' => $request->input('username'),
           'password' => $request->input('password'),
           'first_name' => $request->input('first_name'),
           'last_name' => $request->input('last_name'),
           'city' => $request->select('city'),
           'country' => $request->select('country'),
           'gender' => $request->select('gender'),
        ]);
    }
}
