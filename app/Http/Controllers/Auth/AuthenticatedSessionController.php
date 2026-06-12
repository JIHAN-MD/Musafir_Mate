<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        // Validate the login credentials
        $credentials = $request->only('email', 'password');

        // Attempt to log in the user
        if (Auth::attempt($credentials)) {
            // Regenerate the session to protect against session fixation
            $request->session()->regenerate();

            // Redirect the user to the home page
            return redirect()->intended('/');
        }

        // If authentication fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}

