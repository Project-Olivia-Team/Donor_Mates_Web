<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pendaftaran Donor Darah</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="user/css/profil.css" />
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
              <li class="nav-item">
                <a class="nav-link" href="merchandise.html">Merchandise</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="berita.html">Berita</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="profil.html">Profil</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <div class="container profile-container mt-5 pt-5">
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="profile-img">
            <img
              src="../../img/potprof.jpg"
              alt="Profile Image"
              class="img-fluid rounded-circle"
            />
          </div>
          <p class="mt-3"><b>Riwayat Donor :</b> 21 Juni 2023</p>
          <a href="keranjang.html"
            ><button class="btn btn-edit-profile">Keranjang</button></a
          >
          <a href="../../guest/html/login.html"
            ><button class="btn btn-edit-profile">Sign Out</button></a
          >
        </div>
        <div class="col-md-8">
          <div class="profile-info">
            <h4>Profil</h4>
            <form>
              <div class="form-group">
                <label for="name">Nama</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  value="Megawati"
                  readonly
                />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  value="banteng@gmail.com"
                  readonly
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  value="******"
                  readonly
                />
              </div>
              <div class="form-group">
                <label for="bloodType">Golongan Darah</label>
                <input
                  type="text"
                  class="form-control"
                  id="bloodType"
                  value="B+"
                  readonly
                />
              </div>
              <div class="form-group">
                <label for="phone">No Telepon</label>
                <input
                  type="tel"
                  class="form-control"
                  id="phone"
                  value="081234567989"
                  readonly
                />
              </div>
            </form>
          </div>
          <div class="text-right">
            <a href="editprofil.html"
              ><button class="btn btn-edit-profile">Edit Profil</button></a
            >
          </div>
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
          <div class="col-md-6 footer-column text-right">
            <h4>SOCIAL MEDIA</h4>
            <div class="social-media">
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>
        <div class="footer-column">
          <p class="copyright">&copy; 2024 Donormates. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </body>
</html>