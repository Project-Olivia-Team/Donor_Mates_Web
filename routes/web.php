<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\HomeController;

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
Route::get('/stok', function () {
    return view('admin.stock');
});





Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/detail', function () {
    return view('user.detailproduk');
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



Route::get('/register', function () {
    return view('user.register');
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
Route::get('/cart', function () {
    return view('user.keranjang');
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
Route::get('/merchandise/{id}', [MerchandiseController::class, 'showDetail'])->name('user.detailproduk');


// Routes for Donor
Route::get('/admin/donor', [DonorController::class, 'index'])->name('admin.donor');
Route::post('/admin/donor/store', [DonorController::class, 'store'])->name('admin.donor.store');
Route::put('/admin/donor/{donor}', [DonorController::class, 'update'])->name('admin.donor.update');
Route::get('/admin/donor/{id}/edit', [DonorController::class, 'edit']);
Route::delete('/admin/donor/{donor_id}', [DonorController::class, 'destroy'])->name('admin.donor.destroy');
Route::get('/admin/donor/{id}/detail', [DonorController::class, 'show'])->name('admin.donor.detail');



Route::get('/admin/stock', [StockController::class, 'index'])->name('admin.stock');
Route::post('/admin/stock/store', [StockController::class, 'store'])->name('admin.stock.store');
Route::put('/admin/stock/{stock}', [StockController::class, 'update'])->name('admin.stock.update');
Route::get('/admin/stock/{id}/edit', [StockController::class, 'edit']);
Route::delete('/admin/stock/{stock_id}', [StockController::class, 'destroy'])->name('admin.stock.destroy');
Route::get('/home', [HomeController::class, 'index'])->name('user.home');
