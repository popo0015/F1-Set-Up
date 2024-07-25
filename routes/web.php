<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/setups', function () {
    return view('components.setups.index');
})->name('setups.index');

Route::get('/theory/aerodynamics', function () {
    return view('components.theory.aerodynamics');
})->name('aerodynamics');

Route::get('/theory/engine', function () {
    return view('components.theory.engine');
})->name('engine');

Route::get('/theory/geometry', function () {
    return view('components.theory.geometry');
})->name('geometry');

Route::get('/theory/suspension', function () {
    return view('components.theory.suspension');
})->name('suspension');

Route::get('/theory/tyres', function () {
    return view('components.theory.tyres');
})->name('tyres');
