<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/berita', function () {
    return view('admin.berita');
});


Route::get('/donor', function () {
    return view('admin.donor');
});


Route::get('/landingpage', function () {
    return view('landingpage');
});
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/home', function () {
    return view('user.home');
});
Route::get('/beritaguest', function () {
    return view('user.berita');
});
Route::get('/register', function () {
    return view('user.register');
});
Route::get('/merchandise', function () {
    return view('user.merchandise');
});
Route::get('/profile', function () {
    return view('user.profile');
});
Route::get('/pendaftaran', function () {
    return view('user.pendaftaran');
});
Route::get('/order', function () {
    return view('user.order');
});

