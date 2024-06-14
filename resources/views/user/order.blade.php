<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pesanan yang Sedang Diproses</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="user/css/order.css" />
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
                              <a class="dropdown-item" href="{{ route('user.pesanan') }}">Pesanan</a>
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

    <div class="container mt-5 pt-5">
      <h2 class="text-center mb-5">Pesanan yang Sedang Diproses</h2>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No. Pesanan</th>
                <th>Tanggal</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>12345</td>
                <td>24 Mei 2024</td>
                <td>Kaos</td>
                <td>1</td>
                <td>Rp. 50.000</td>
                <td>Sedang Diproses</td>
              </tr>
              <tr>
                <td>12346</td>
                <td>25 Mei 2024</td>
                <td>Produk Lain</td>
                <td>2</td>
                <td>Rp. 100.000</td>
                <td>Sedang Diproses</td>
              </tr>
              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <footer class="footer mt-5">
      <div class="container">
          <div class="row">
              <div class="col-md-6 footer-column">
                  <img src="../../img/putih.png" width="80px"/>
                  <p>Jl. Buring, No 19, Malang 65112, Jawa Timur, Indonesia.</p>
                  <p>Hubungi kami untuk informasi lebih lanjut atau jika Anda memiliki pertanyaan terkait donor darah.</p>
                  <p><i class="fa fa-envelope"></i> donormates@gmail.com</p>
                  <p><i class="fa fa-whatsapp"></i> +62 7893 2213 876</p>
                  <p><i class="fa fa-phone"></i> +62 7892 6782 234</p>
              </div>
              <div class="col-md-6 footer-column text-right">
                  <h4>MEDIA SOSIAL</h4>
                  <div class="social-media">
                      <a href="#"><i class="fa fa-instagram"></i></a>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-youtube-play"></i></a>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-12 text-center">
                  <p class="mb-0">&copy; 2024 Donormates. All rights reserved.</p>
              </div>
          </div>
      </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>