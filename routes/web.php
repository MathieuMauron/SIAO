<?php

use App\Http\Controllers\ActuController;
use App\Http\Controllers\AuthController;
use App\Models\Actualites;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


    Route::get('/db-test', function () {
        try {
            DB::connection()->getPdo();
            return "✅ Connexion à la base de données réussie.";
        } catch (\Exception $e) {
            return "❌ Erreur de connexion : " . $e->getMessage();
        }
    });

    Route::get('/test-view', function () {
        // ⚠️ Forcer l’inclusion du fichier dans le déploiement
        File::get(resource_path('views/test.blade.php'));
    
        return view('test');
    });

    Route::get('/db-test2', function () {
        try {
            DB::connection()->getPdo();
            return '✅ Connexion DB OK';
        } catch (\Exception $e) {
            return '❌ Erreur DB : ' . $e->getMessage();
        }
    });
    
    Route::get('/test-home', function () {
        return response('✅ Route test simple OK', 200);
    });

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

    Route::get('/lire_plus/{id}', function($id) {
        // dd(Actualites::find($id))
;        return view('actualites.plus', ['actualites' => Actualites::find($id)]);
    });

    Route::get('/modif_actu/{id}', function ($id) {
        $actualite = Actualites::find($id);
        return view('actualites.modif_actu', compact('actualite'));
    })->name('modif_actu');

    Route::put('/update_actu/{id}', [ActuController::class, 'editActu'])->name('update_actu');

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

    Route::get('/test-view', function () {
        return view('home');
    });

    Route::get ('/test', function() {
        return view('test');
    });

    Route::get('/tests', function(){
        return view('tests');
    });