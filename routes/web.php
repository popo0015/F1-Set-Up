<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/setups', function () {
    return view('components.setups.index');
})->name('setups.index');
