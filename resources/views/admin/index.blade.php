<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"
    />
    <link rel="stylesheet" href="admin/css/index.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <button
        class="navbar-toggler"
        type="button"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand ml-2" href="#">LOGO</a>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-lg-3 sidebar bg-danger">
          <ul class="nav flex-column">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.html">Manajemen User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="donor.html">Manajemen Donor Darah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="berita.html">Manajemen Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="merchandise.html"
                >Manajemen Merchandise</a
              >
            </li>
            <a class="nav-link" href="../../guest/html/login.html">Sign out</a>
          </ul>
        </nav>
        <main class="main-content col-lg-9 ml-sm-auto col-md-9 pt-3 px-4">
          <div class="row">
            <div class="col-md-3">
              <div class="box">
                <h5>Golongan Darah A+</h5>
                <p>50 kantong</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box">
                <h5>Golongan Darah A-</h5>
                <p>30 kantong</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box">
                <h5>Golongan Darah B+</h5>
                <p>20 kantong</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box">
                <h5>Golongan Darah B-</h5>
                <p>40 kantong</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box">
                <h5>Golongan Darah O+</h5>
                <p>60 kantong</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box">
                <h5>Golongan Darah O-</h5>
                <p>25 kantong</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box">
                <h5>Golongan Darah AB+</h5>
                <p>35 kantong</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box">
                <h5>Golongan Darah AB-</h5>
                <p>15 kantong</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">Grafik Data Pendonor</div>
                <div class="card-body">
                  <canvas id="donorChart"></canvas>
                </div>
              </div>
            </div>
          </div>

          <footer class="footer">
            <hr />
            <p class="copyright">
              &copy; 2024 Donormates. All rights reserved.
            </p>
          </footer>
        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="admin/js/index.js"></script>
  </body>
</html>
