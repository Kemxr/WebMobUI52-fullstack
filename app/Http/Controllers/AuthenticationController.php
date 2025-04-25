<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRegisterRequest;
use App\Http\Requests\AuthLoginRequest;


class AuthenticationController extends Controller
{
    public function register(AuthRegisterRequest $request)
    {
        User::create($request->validated());
        //... suite de la logique
    }

    //Rajouter une migration pour compléter la table users avec les champs firstname et lastname
}
