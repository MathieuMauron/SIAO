<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;
use Illuminate\Support\Facades\DB;


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
        try {
            // Test de la connexion à la base de données
            DB::connection()->getPdo(); // Tentative de connexion à la DB
            
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);
    
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            return redirect('/login')->with('success', 'Registration successful! Please log in.');
        } catch (\Exception $e) {
            return redirect('/register')->withErrors([
                'email' => 'Error: Could not connect to the database. Please try again later.'
            ]);
        }
    }
    
}
