<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/css/keranjang.css') }}" />
    <link rel="icon" href="{{ asset('img/merah.png') }}" type="image/x-icon" >
</head>
<body>
<header class="header fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/putih.png') }}" width="80px"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if(request()->routeIs('user.home')) active @endif">
                        <a class="nav-link" href="{{ route('user.home') }}">Beranda</a>
                    </li>
                    <li class="nav-item @if(request()->routeIs('user.pendaftaran')) active @endif">
                        <a class="nav-link" href="{{ route('user.pendaftaran') }}">Pendaftaran</a>
                    </li>
                    <li class="nav-item dropdown @if(request()->routeIs('user.merchandise') || request()->routeIs('user.keranjang') || request()->routeIs('user.pesanan')) active @endif">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMerchandise" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Toko
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMerchandise">
                            <a class="dropdown-item" href="{{ route('user.merchandise') }}">Merchandise</a>
                            <a class="dropdown-item" href="{{ route('user.keranjang') }}">Keranjang</a>
                            <a class="dropdown-item" href="{{ route('user.order') }}">Pesanan</a>
                        </div>
                    </li>
                    <li class="nav-item @if(request()->routeIs('user.berita')) active @endif">
                        <a class="nav-link" href="{{ route('user.berita') }}">Berita</a>
                    </li>
                    <li class="nav-item dropdown @if(request()->routeIs('profile') || request()->routeIs('user.profile.edit')) active @endif">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfil" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownProfil">
                            <a class="dropdown-item" href="{{ route('user.profile') }}">Profil Saya</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<body>
    
    <div class="container mt-5">
        <h2>Checkout</h2>
        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea class="form-control" id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="shipping">Jasa Kirim</label>
                <select class="form-control" id="shipping" name="shipping" required>
                    <option value="JNE">JNE</option>
                    <option value="TIKI">TIKI</option>
                    <option value="POS">POS Indonesia</option>
                    <option value="Gojek">Gojek</option>
                </select>
            </div>
            <div class="form-group">
                <label for="payment_method">Metode Pembayaran</label>
                <select class="form-control" id="payment_method" name="payment_method" required>
                    <option value="bank_transfer">Bank Transfer</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="e_wallet">E-Wallet</option>
                </select>
            </div>
            <div class="form-group">
                <label for="total">Total Bayar</label>
                <input type="number" class="form-control" id="total" name="total" value="{{ $total }}" readonly>
            </div>
            <div class="text-right">
                <button type="submit" class="btn merah">Checkout</button>
            </div>
           
        </form>
    </div>
   
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
