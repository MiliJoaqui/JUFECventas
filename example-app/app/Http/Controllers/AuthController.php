<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Display login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login form submission
    //csrf es un token de autentificación que utiliza laravel para corroborar el inicio de sesión
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/dashboard');
        }

        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}