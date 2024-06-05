<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

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
Route::get('/merch', function () {
    return view('admin.merchandise');
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
Route::get('/news', function () {
    return view('user.news');
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


//berita admin
Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita');
Route::post('/admin/berita/store', [BeritaController::class, 'store'])->name('admin.berita.store');
Route::get('/admin/berita/{berita}', [BeritaController::class, 'show']); 
Route::put('/admin/berita/{berita}', [BeritaController::class, 'update'])->name('admin.berita.update');
Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit']);
Route::delete('/admin/berita/{berita_id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');


Route::get('/berita/{berita_id}', [BeritaController::class, 'show'])->name('news.show');
