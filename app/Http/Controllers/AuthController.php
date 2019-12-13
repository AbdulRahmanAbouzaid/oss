<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\RegistrationRequest;


class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }


    public function register(RegistrationRequest $request)
    {
        $user = new User;
        $user = $user->addUser($request);
        auth()->login($user);
        
        return redirect('/');
    }


    public function showLoginForm()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt(request(['email', 'password']))){
			return redirect('/');
        }

		return back()->withErrors('Invalid Email or password!');
    }
}
