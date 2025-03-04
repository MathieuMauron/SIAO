<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class AuthController extends Controller
{
    public function login(Request $request) {
        try {$credentials = $request->validate([
            'email' => ['required','string' ], 
            'password' => ['required', 'string']
        ]);
        // dd($credentials);
        return Auth::attempt($credentials) ? to_route('home') : to_route('login');
    } catch (Exception $e){
        
        dd($e);
    }
    }

    public function logout() : RedirectResponse{
        Auth::logout();
        return to_route('home');
    }

    public function register(Request $request)
    {
        
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}
