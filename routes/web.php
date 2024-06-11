<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\AuthController;


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

Route::get('/admin/berita', function () {
    return view('admin.berita');
});

Route::get('/donor', function () {
    return view('admin.donor');
});
Route::get('/detaildonor', function () {
    return view('admin.detaildonor');
});



Route::get('/landingpage', function () {
    return view('landingpage');
});



Route::get('/home', function () {
    return view('user.home');
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

Route::get('/co', function () {
    return view('user.checkout');
});
Route::get('/db', function () {
    return view('user.detailberita');
});

Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita');
Route::post('/admin/berita/store', [BeritaController::class, 'store'])->name('admin.berita.store');
Route::put('/admin/berita/{berita}', [BeritaController::class, 'update'])->name('admin.berita.update');
Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit']);
Route::delete('/admin/berita/{berita_id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
Route::get('/user/berita', [BeritaController::class, 'showBerita'])->name('user.berita');
Route::get('/user/berita/{berita_id}', [BeritaController::class, 'showDetail'])->name('user.detailberita');


// Routes for Merchandise
Route::get('/admin/merchandise', [MerchandiseController::class, 'index'])->name('admin.merchandise');
Route::post('/admin/merchandise/store', [MerchandiseController::class, 'store'])->name('admin.merchandise.store');
Route::put('/admin/merchandise/{merchandise}', [MerchandiseController::class, 'update'])->name('admin.merchandise.update');
Route::get('/admin/merchandise/{id}/edit', [MerchandiseController::class, 'edit']);
Route::delete('/admin/merchandise/{merchandise_id}', [MerchandiseController::class, 'destroy'])->name('admin.merchandise.destroy');
Route::get('/user/merchandise', [MerchandiseController::class, 'showMerchandise'])->name('user.merchandise');
Route::get('/user/merchandise/search', [MerchandiseController::class, 'search'])->name('user.merchandise.search');


//Routes for Auth
Route::get('/login', function () {
    return view('user.login');
});

Route::get('/register', function () {
    return view('user.register');
});

Route::post('/register', [AuthController::class, 'user.register']);
Route::post('/login', [AuthController::class, 'user.login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/home', function () {
    return view('user.home');
})->middleware('auth');
