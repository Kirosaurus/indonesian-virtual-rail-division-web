<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('dashboard', [ProductController::class, 'index']);
});
Route::get('/admin', function () {
    return view('dashboard_admin');
});
Route::get('/admin/create', function () {
    return view('dashboard_admin_create');
});

Route::get('/payware', [ProductController::class, 'index']);

Route::get('/freeware', function () {
    return view('freeware');
});

Route::get('/terms&condition', function () {
    return view('terms&condition');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('loginpage');
});