<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Berita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('user/css/berita.css') }}" />
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
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('user.home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('user.pendaftaran') }}">Pendaftaran</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('user.merchandise') }}">Merchandise</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ route('user.berita') }}">Berita</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                  </li>
              </ul>
          </div>
      </nav>
      </div>
    </header>

    <div class="container mt-5 pt-5">
      <div class="berita-container my-5 pt-5">
        <h1 class="berita-title">{{ $berita->judul }}</h1>
        <p class="berita-author"><b>Penulis :</b> {{ $berita->penulis }}</p>
        <p class="berita-date"><b>Tanggal upload :</b> {{ $berita->tanggal_upload }}</p>
        <div class="berita-image my-4">
          <img src="{{ asset($berita->gambar) }}" alt="Berita Image" class="img-fluid" />
        </div>
        <div class="berita-content">
          <p>{{ $berita->isi_berita }}</p>
        </div>
      </div>
    </div>

    <footer class="footer mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 footer-column">
            <h4>LOGO</h4>
            <p>Lorem ipsum dolor sit amet consectetur. Tortor enim non congue vitae ut. In nullam etiam scelerisque tristique. Malesuada sit gravida at rutrum. Pulvinar ac eu donec nisl cras ut.</p>
            <p><i class="fa fa-envelope"></i> donormates@gmail.com</p>
            <p><i class="fa fa-whatsapp"></i> +62 7893 2213 876</p>
            <p><i class="fa fa-phone"></i> +62 7892 6782 234</p>
          </div>
          <div class="col-md-6 footer-column text-right">
            <h4>SOCIAL MEDIA</h4>
            <div class="social-media">
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center copyright">
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
