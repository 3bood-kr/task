<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginPage(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('home');
        }
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout(Request $request){

        if(Auth::check()){
            Auth::logout();
        }

        return to_route('home');
    }

    public function showRegisterPage(){
        return view('auth.register');
    }
    public function registerNewUser(Request $request){
        $validatedData = $request->validate([
           'email' => 'email|required',
           'password' => 'min:8',
        ]);

        $user = \App\Models\User::create($request->only(['email', 'password']));

        if($user){
            Auth::login($user);
        }
        return to_route('home');
    }

}
