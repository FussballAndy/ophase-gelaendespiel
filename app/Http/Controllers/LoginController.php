<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function loginForm() 
    {
        return view('login');
    }

    public function tutorPage()
    {
        $station = Auth::user()->station;
        $stationName = $station->name;
        $rounds = $station->rounds->sortBy('time_slot');
        return view('tutor', [
            'stationName' => $stationName,
            'rounds' => $rounds,
        ]);
    }

    public function login(Request $request)
    {
        $creds = $request->validate([
            'token' => ['required', 'string']
        ]);

        $user = User::where('token', $creds)->first();
        
        if($user) {
            Auth::login($user);

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
