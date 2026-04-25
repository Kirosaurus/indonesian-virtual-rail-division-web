<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/payware', function () {
    return view('payware');
});

Route::get('/freeware', function () {
    return view('freeware');
});