<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function loginForm() 
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $creds = $request->validate([
            'token' => ['required', 'string', 'regex:/[0-9A-F]{8}/']
        ]);

        if(Auth::attempt($creds)) {
            $request->session()->regenerate();

            return redirect()->intended('tutor');
        }

        return back()->withErrors([
            'token' => 'Invalid token'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

    //
}
