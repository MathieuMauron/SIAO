<?php

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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


