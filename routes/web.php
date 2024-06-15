<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\BotManController;


// Halaman Utama
Route::get('/', function () {
    return view('landingpage');
})->name('home');

// Halaman Admin Dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard');

// Halaman Stock Darah
Route::get('/admin/stock', [StockController::class, 'index'])->name('admin.stock');

// Halaman Pendaftaran
Route::get('/pendaftaran', function () {
    return view('user.pendaftaran');
})->name('pendaftaran');

// Halaman Detail Produk
Route::get('/detail', function () {
    return view('user.detailproduk');
})->name('detailproduk');

// Halaman Landingpage
Route::get('/landingpage', function () {
    return view('landingpage');
})->name('landingpage');

// Halaman Home User
Route::get('/home', [HomeController::class, 'index'])->name('user.home')->middleware('auth');

// Halaman Profil User
Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit')->middleware('auth');
Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update')->middleware('auth');

// Halaman Order
Route::get('/order', function () {
    return view('user.order');
})->name('order');

// Halaman Checkout
Route::get('/co', function () {
    return view('user.checkout');
})->name('checkout');

// Halaman Detail Berita
Route::get('/db', function () {
    return view('user.detailberita');
})->name('detailberita');

// Halaman Keranjang
Route::get('/keranjang', function () {
    return view('user.keranjang');
})->name('keranjang');

// Routes Berita
Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita');
Route::post('/admin/berita/store', [BeritaController::class, 'store'])->name('admin.berita.store');
Route::put('/admin/berita/{berita}', [BeritaController::class, 'update'])->name('admin.berita.update');
Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
Route::delete('/admin/berita/{berita_id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
Route::get('/user/berita', [BeritaController::class, 'showBerita'])->name('user.berita');
Route::get('/user/berita/{berita_id}', [BeritaController::class, 'showDetail'])->name('user.detailberita');

// Routes Merchandise
Route::get('/admin/merchandise', [MerchandiseController::class, 'index'])->name('admin.merchandise');
Route::post('/admin/merchandise/store', [MerchandiseController::class, 'store'])->name('admin.merchandise.store');
Route::put('/admin/merchandise/{merchandise}', [MerchandiseController::class, 'update'])->name('admin.merchandise.update');
Route::get('/admin/merchandise/{id}/edit', [MerchandiseController::class, 'edit'])->name('admin.merchandise.edit');
Route::delete('/admin/merchandise/{merchandise_id}', [MerchandiseController::class, 'destroy'])->name('admin.merchandise.destroy');
Route::get('/user/merchandise', [MerchandiseController::class, 'showMerchandise'])->name('user.merchandise');
Route::get('/user/merchandise/search', [MerchandiseController::class, 'search'])->name('user.merchandise.search');
Route::get('/merchandise/{id}', [MerchandiseController::class, 'showDetail'])->name('user.detailproduk');

// Routes Donor
Route::get('/pendaftaran', [DonorController::class, 'pendaftaranForm'])->name('user.pendaftaran');
Route::post('/pendaftaran', [DonorController::class, 'pendaftaran']);
Route::get('/admin/donor', [DonorController::class, 'index'])->name('admin.donor');
Route::post('/admin/donor/store', [DonorController::class, 'store'])->name('admin.donor.store');
Route::put('/admin/donor/{donor}', [DonorController::class, 'update'])->name('admin.donor.update');
Route::get('/admin/donor/{id}/edit', [DonorController::class, 'edit'])->name('admin.donor.edit');
Route::delete('/admin/donor/{donor_id}', [DonorController::class, 'destroy'])->name('admin.donor.destroy');
Route::get('/admin/donor/{id}/detail', [DonorController::class, 'show'])->name('admin.donor.detail');
Route::get('/admin/donor/data', [DonorController::class, 'getDonorData'])->name('admin.getDonorData');



// Routes Stock
Route::get('/admin/stock', [StockController::class, 'index'])->name('admin.stock');
Route::post('/admin/stock/store', [StockController::class, 'store'])->name('admin.stock.store');
Route::put('/admin/stock/{stock}', [StockController::class, 'update'])->name('admin.stock.update');
Route::get('/admin/stock/{id}/edit', [StockController::class, 'edit'])->name('admin.stock.edit');
Route::delete('/admin/stock/{stock_id}', [StockController::class, 'destroy'])->name('admin.stock.destroy');

// Routes  Auth
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.index');
    Route::get('/admin/get-donor-data', [DonorController::class, 'getDonorData'])->name('admin.getDonorData');

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});

// Routes untuk user
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/home', [HomeController::class, 'index'])->name('user.home');
    Route::get('/user/berita', [BeritaController::class, 'showBerita'])->name('user.berita');
    Route::get('/user/berita/{berita_id}', [BeritaController::class, 'showDetail'])->name('user.detailberita');
    Route::get('/user/merchandise', [MerchandiseController::class, 'showMerchandise'])->name('user.merchandise');
    Route::get('/user/merchandise/search', [MerchandiseController::class, 'search'])->name('user.merchandise.search');
    Route::get('/user/merchandise/{id}', [MerchandiseController::class, 'showDetail'])->name('user.detailproduk');
});

// Route untuk halaman manajemen user
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/admin/orders', [OrderController::class, 'adminIndex'])->name('admin.orders');
    Route::put('/admin/orders/{id}', [OrderController::class, 'update'])->name('admin.orders.update');
    Route::delete('/admin/orders/{id}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');
    Route::get('/admin/orders/proof/{id}', [OrderController::class, 'showProof'])->name('admin.orders.showProof');
});

// Route untuk keranjang
Route::middleware(['auth'])->group(function () {
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
    Route::get('/keranjang', [CartController::class, 'showCart'])->name('user.keranjang');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::patch('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
    
    //checkout
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('user.checkout');
    Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
    Route::get('/order', [OrderController::class, 'index'])->name('user.order');
    Route::post('/order/upload', [OrderController::class, 'uploadProof'])->name('order.upload');
});


Route::get('/merchandise', [MerchandiseController::class, 'index'])->name('merchandise');
Route::get('/pesanan', [OrderController::class, 'index'])->name('user.pesanan');
Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('user.checkout');
Route::post('/checkout/process', [CheckoutController::class, 'processCheckout'])->name('checkout.process');






// Routes  Cart
Route::middleware(['auth'])->group(function () {
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
    Route::get('/keranjang', [CartController::class, 'showCart'])->name('user.keranjang');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::patch('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');

    // Routes   Checkout
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('user.checkout');
    Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');

    // Routes  Order
    Route::get('/order', [OrderController::class, 'index'])->name('user.order');
    Route::post('/order/upload', [OrderController::class, 'uploadProof'])->name('order.upload');
});








use App\Http\Controllers\ChatbotController;

Route::post('/chatbot', [ChatbotController::class, 'sendMessage'])->name('chatbot.send');
