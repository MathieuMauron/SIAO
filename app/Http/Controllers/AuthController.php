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
        if (Auth::attempt($credentials)) {
            return to_route('home');
        } else {
            return to_route('login')->withErrors(['email' => 'Vos identifiants sont incorrects'])->onlyInput('email');
        }
        
    } catch (Exception $e){
        return to_route('auth.login')->withErrors([
            'email' => 'Vos identifiants sont incorrects'
        ])->onlyInput('email');
    }
    }

    public function logout() : RedirectResponse{
        Auth::logout();
        return to_route('home');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        // dd($request);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}
