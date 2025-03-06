<?php

use App\Http\Controllers\ActuController;
use App\Http\Controllers\AuthController;
use App\Models\Actualites;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/gouvernance', function () {
        return view('gouvernance.gouvernance');
    })->name('gouvernance');

    Route::get('/equipe', function () {
        return view('equipe.equipe');
    })->name('equipe');

    Route::get('/actualites', function () {
        return view('actualites.actualites',['actualites' => Actualites::all()]);
    })->name('actualites');

    Route::get('/add_actu', function () {
        return view('actualites.add_actu');
    })->name('add_actu');

    Route::post('/add_actu', [ActuController::class, 'addActualite']);
    Route::delete('delete_actu/{id}',[ActuController::class, 'delActu']);

    Route::get('/modif_actu/{id}', function ($id) {
        $actualite = Actualites::find($id);
        return view('actualites.modif_actu', compact('actualite'));
    })->name('modif_actu');

    Route::put('/update_actu/{id}', function ($id) {
        $actualite = Actualites::find($id);
        $actualite->titre = request('titre');
        $actualite->accroche = request('accroche');
        $actualite->content = request('content');
        $actualite->save();
    
        return redirect()->route('actualites');  
    })->name('update_actu');

    
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login',[AuthController::class, 'login']);
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    
    Route::get('/profil', function () {
        return view('auth.profil');
    })->name('profil');

    

    