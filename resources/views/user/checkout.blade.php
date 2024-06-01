<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="user/css/checkout.css" />
  </head>
  <body>
    <header class="header fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">LOGO</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pendaftaran.html">Pendaftaran</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="merchandise.html">Merchandise</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="berita.html">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profil.html">Profil</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <div class="container mt-5 pt-5">
      <h2 class="text-center mb-5">Checkout</h2>
      <div class="row">
        <!-- Shipping Details -->
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Detail Pengiriman</h4>
          <form class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="name">Nama Lengkap</label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Nama Lengkap"
                required
              />
              <div class="invalid-feedback">Nama lengkap diperlukan.</div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="you@example.com"
                required
              />
              <div class="invalid-feedback">Email yang valid diperlukan.</div>
            </div>

            <div class="mb-3">
              <label for="address">Alamat</label>
              <input
                type="text"
                class="form-control"
                id="address"
                placeholder="Jl. Contoh No. 123"
                required
              />
              <div class="invalid-feedback">Alamat pengiriman diperlukan.</div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="province">Provinsi</label>
                <select
                  class="custom-select d-block w-100"
                  id="province"
                  required
                >
                  <option value="">Pilih...</option>
                  <option>Jawa Timur</option>
                  <option>Jawa Tengah</option>
                  <option>Jawa Barat</option>
                  <!-- Add other provinces as needed -->
                </select>
                <div class="invalid-feedback">Pilih provinsi yang valid.</div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="city">Kabupaten/Kota</label>
                <select class="custom-select d-block w-100" id="city" required>
                  <option value="">Pilih...</option>
                  <option>Surabaya</option>
                  <option>Malang</option>
                  <option>Bandung</option>
                  <!-- Add other cities/regencies as needed -->
                </select>
                <div class="invalid-feedback">
                  Pilih kabupaten/kota yang valid.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="district">Kecamatan</label>
                <select
                  class="custom-select d-block w-100"
                  id="district"
                  required
                >
                  <option value="">Pilih...</option>
                  <option>Kecamatan 1</option>
                  <option>Kecamatan 2</option>
                  <option>Kecamatan 3</option>
                  <!-- Add other districts as needed -->
                </select>
                <div class="invalid-feedback">Pilih kecamatan yang valid.</div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="zip">Kode Pos</label>
                <input
                  type="text"
                  class="form-control"
                  id="zip"
                  placeholder=""
                  required
                />
                <div class="invalid-feedback">Kode pos diperlukan.</div>
              </div>
            </div>
          </form>
        </div>

        <!-- Order Summary -->
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Ringkasan Pesanan</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li
              class="list-group-item d-flex justify-content-between lh-condensed"
            >
              <div>
                <h6 class="my-0">Kaos</h6>
                <small class="text-muted">Deskripsi singkat</small>
              </div>
              <span class="text-muted">Rp.50.000</span>
            </li>
            <li
              class="list-group-item d-flex justify-content-between lh-condensed"
            >
              <div>
                <h6 class="my-0">Produk Lain</h6>
                <small class="text-muted">Deskripsi singkat</small>
              </div>
              <span class="text-muted">Rp.50.000</span>
            </li>
            <li
              class="list-group-item d-flex justify-content-between lh-condensed"
            >
              <div>
                <h6 class="my-0">Produk Lain</h6>
                <small class="text-muted">Deskripsi singkat</small>
              </div>
              <span class="text-muted">Rp.50.000</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (IDR)</span>
              <strong>Rp.150.000</strong>
            </li>
          </ul>
          <a href="konfirmasi.html" class="btn merah btn-lg btn-block"
            >Lanjutkan ke Pembayaran</a
          >
        </div>
      </div>
    </div>

    <footer class="footer mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 footer-column">
            <h4>LOGO</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur. Tortor enim non congue
              vitae ut. In nullam etiam scelerisque tristique. Malesuada sit
              gravida at rutrum. Pulvinar ac eu donec nisl cras ut.
            </p>
            <p><i class="fa fa-envelope"></i> donormates@gmail.com</p>
            <p><i class="fa fa-whatsapp"></i> +62 7893 2213 876</p>
            <p><i class="fa fa-phone"></i> +62 7892 6782 234</p>
          </div>
          <div class="col-md-6 footer-column">
            <h4>SOCIAL MEDIA</h4>
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