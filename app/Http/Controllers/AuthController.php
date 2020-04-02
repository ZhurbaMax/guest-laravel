<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
           'password' => bcrypt($request->input('password')),
           'first_name' => $request->input('first_name'),
           'last_name' => $request->input('last_name'),
           'city' => $request->input('city'),
           'country' => $request->input('country'),
           'gender' => $request->input('gender'),
        ]);
        return redirect()->route('home')->with('info', 'Вы успешно зарегистрированны');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:20',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('home')->with('info', 'ВЫ успешно авторизировались');
        } else {
            return redirect()->back()->with('info', 'Не верно ввели данные');
        }
    }

    public function getSignout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
