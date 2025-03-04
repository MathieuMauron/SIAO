<?php

use App\Http\Controllers\ActuController;
use App\Http\Controllers\AuthController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/gouvernance', function () {
        return view('gouvernance.gouvernance');
    })->name('gouvernance');

    Route::get('/equipe', function () {
        return view('equipe.equipe');
    })->name('equipe');

    Route::get('/actualites', function () {
        return view('actualites.actualites');
    })->name('actualites');

    Route::get('/add_actu', function () {
        return view('actualites.add_actu');
    })->name('add_actu');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login',[AuthController::class, 'login']);
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

    Route::get('/profil', function () {
        return view('auth.profil');
    })->name('profil');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::post('/add_actu', [ActuController::class, 'addActualite']);

    

    