<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('layouts.auth.login');
});

Route::get('/register', function () {
    return view('layouts.auth.register');
});

Route::get('/anime-details', function () {
    return view('layouts.anime-details');
});

Route::get('/anime-watching', function () {
    return view('layouts.anime-watching');
});

Route::get('/blog', function () {
    return view('layouts.blog');
});

Route::get('/blog-details', function () {
    return view('layouts.blog-details');
});


Route::get('/categories', function () {
    return view('layouts.categories');
});
