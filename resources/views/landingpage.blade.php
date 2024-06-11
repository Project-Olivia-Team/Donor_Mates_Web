<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="guest/css/home.css" />
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
                <a class="nav-link b" href="/login"
                  ><button>Login</button></a
                >
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <!-- Hero Section -->
    <div class="hero-section">
      <div class="content text-left">
        <h1>Ikut Donor Darah, Bantu Selamatkan Nyawa</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt, dolor
          nesciunt quia dolores hic asperiores molestiae saepe quo consectetur
          officia illum aliquid libero, doloribus, nostrum reiciendis ab!
          Sapiente accusantium ipsam inventore suscipit explicabo! Esse sint
          dicta libero deserunt eaque amet autem! Enim error quod autem.
        </p>
        <a href="#"><button>See more</button></a>
      </div>
    </div>
    <!-- Manfaat Donor Darah -->
    <div class="container manfaat-donor my-5 text-center">
      <h2>Apa sih manfaat donor darah?</h2>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
          <div class="card manfaat-card">
            <img
              src="../../img/turunbb.png"
              class="card-img-top"
              alt="Menurunkan berat badan"
            />
          </div>
          <div class="card-body">
            <h5 class="card-title">Menurunkan berat badan</h5>
            <p class="card-text">
              Donor darah dapat membantu menurunkan berat badan karena prosesnya
              membakar kalori.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
          <div class="card manfaat-card">
            <img
              src="../../img/jagakesehtan.png"
              class="card-img-top"
              alt="Menjaga kesehatan"
            />
          </div>
          <div class="card-body">
            <h5 class="card-title">Menjaga kesehatan</h5>
            <p class="card-text">
              Darah yang hilang digantikan dengan darah baru, dan dapat
              meningkatkan kesehatan sistem kardiovaskular.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
          <div class="card manfaat-card">
            <img
              src="../../img/produksidarah.png"
              class="card-img-top"
              alt="Meningkatkan produksi darah"
            />
          </div>
          <div class="card-body">
            <h5 class="card-title">Meningkatkan produksi darah</h5>
            <p class="card-text">
              Ketika darah didonorkan, tubuh akan segera bekerja untuk
              menggantikan darah yang hilang.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabel -->
    <div class="container my-5 stock-darah">
      <h2 class="text-center">Stock Darah</h2>
      <div class="container my-5 d-flex justify-content-center">
        <table id="userTable" class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Golongan Darah</th>
              <th>Jumlah Stock</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>A+</td>
              <td>5</td>
            </tr>
            <tr>
              <td>2</td>
              <td>A-</td>
              <td>10</td>
            </tr>
            <tr>
              <td>3</td>
              <td>B+</td>
              <td>10</td>
            </tr>
            <tr>
              <td>4</td>
              <td>B-</td>
              <td>10</td>
            </tr>
            <tr>
              <td>5</td>
              <td>O+</td>
              <td>10</td>
            </tr>
            <tr>
              <td>6</td>
              <td>O-</td>
              <td>10</td>
            </tr>
            <tr>
              <td>7</td>
              <td>AB+</td>
              <td>10</td>
            </tr>
            <tr>
              <td>8</td>
              <td>AB-</td>
              <td>10</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- TIPS -->
    <div class="container tips my-5">
      <h2 class="text-center">6 Tips Donor Darah Sehat</h2>
      <div class="row text-center">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card tips-card">
            <div class="card-body">
              <h5 class="card-title">
                Cukup istirahat sebelum menyumbangkan darah
              </h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Excepturi magnam fuga dolore ratione ea repellendus quasi eum
                vel inventore labore!
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card tips-card">
            <div class="card-body">
              <h5 class="card-title">
                Makan tiga jam sebelum menyumbangkan darah
              </h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Excepturi magnam fuga dolore ratione ea repellendus quasi eum
                vel inventore labore!
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card tips-card">
            <div class="card-body">
              <h5 class="card-title">
                Cukup Minum Setelah dan sesudah menyumbangkan darah
              </h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Excepturi magnam fuga dolore ratione ea repellendus quasi eum
                vel inventore labore!
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card tips-card">
            <div class="card-body">
              <h5 class="card-title">Beristirahat setelah mendonorkan darah</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Excepturi magnam fuga dolore ratione ea repellendus quasi eum
                vel inventore labore!
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card tips-card">
            <div class="card-body">
              <h5 class="card-title">Konsultasi kesehatan dengan dokter</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Excepturi magnam fuga dolore ratione ea repellendus quasi eum
                vel inventore labore!
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
          <div class="card tips-card">
            <div class="card-body">
              <h5 class="card-title">Konsultasi kesehatan dengan dokter</h5>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Excepturi magnam fuga dolore ratione ea repellendus quasi eum
                vel inventore labore!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container sponsor my-5 text-center">
      <h2>Sponsored by</h2>
      <div class="row justify-content-center">
        <div class="col-md-2 col-sm-4 mb-4">
          <div class="sponsor-logo">
            <img src="../../img/pmi.png" class="img-fluid" alt="Sponsor 1" />
          </div>
        </div>
        <div class="col-md-2 col-sm-4 mb-4">
          <div class="sponsor-logo">
            <img src="../../img/pmi.png" class="img-fluid" alt="Sponsor 2" />
          </div>
        </div>
        <div class="col-md-2 col-sm-4 mb-4">
          <div class="sponsor-logo">
            <img src="../../img/pmi.png" class="img-fluid" alt="Sponsor 3" />
          </div>
        </div>
        <div class="col-md-2 col-sm-4 mb-4">
          <div class="sponsor-logo">
            <img src="../../img/pmi.png" class="img-fluid" alt="Sponsor 4" />
          </div>
        </div>
        <div class="col-md-2 col-sm-4 mb-4">
          <div class="sponsor-logo">
            <img src="../../img/pmi.png" class="img-fluid" alt="Sponsor 5" />
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
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