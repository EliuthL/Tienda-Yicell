<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/login', function () {
    return view('pages.login');
})->name('login');
