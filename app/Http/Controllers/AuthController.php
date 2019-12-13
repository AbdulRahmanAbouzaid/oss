<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\RegistrationRequest;


class AuthController extends Controller
{
    public function show()
    {
        return view('register');
    }


    public function register(RegistrationRequest $request)
    {
        $user = new User;
        $user = $user->addUser($request);
        
        return redirect('/');
    }

}
