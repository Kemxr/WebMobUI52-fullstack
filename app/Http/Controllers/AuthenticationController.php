<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRegisterRequest;
use App\Http\Requests\AuthLoginRequest;
use App\Models\User;


class AuthenticationController extends Controller
{
    public function register(AuthRegisterRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('showLoginForm')->with('success', 'Inscription réussie !');
    }

    public function login(AuthLoginRequest $request)
    {
        $credentials = $request->validated();
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //Faire migration pour le role admin et rajouter dans l'authentification si admin
            // if (Auth::user()->role == 'admin') {
            //    $request->session()->set('isAdmin', true);
            // }
 
            return redirect()->intended('/chapitre/1');
        }
 
        return back()->withErrors([
            'email' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Déconnexion réussie !');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegisterForm()
    {
        return view('register');
    }
}
