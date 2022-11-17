<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        //валидация
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
        //регистрация
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //авторизация
        Auth::login($user);

        //флеш сообщение
        session()->flash('success', 'successful registration');
        //редирект на главную
        return redirect()->home();
    }


    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request): RedirectResponse
    {
        //валидация
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //авторизация
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect()->home();
        }
        //back редиректит на предыдущую страницу
        return redirect()->back()->with('error', 'Incorrect login or password');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login.create');
    }

}
