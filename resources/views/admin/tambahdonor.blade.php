<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Pendonor</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/donor.css" />
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
            <li class="nav-item">
              <a class="nav-link" href="index.html">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user.html">Manajemen User</a>
            </li>
            <li class="nav-item active">
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
            <li class="nav-item">
              <a class="nav-link" href="login.html">Sign out</a>
            </li>
          </ul>
        </nav>
        <main class="main-content col-lg-9 ml-sm-auto col-md-9 pt-3 px-4">
          <h2>Tambah Pendonor</h2>
          <form id="donorForm">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input
                type="text"
                class="form-control"
                id="nama"
                placeholder="Nama"
                required
              />
            </div>
            <div class="form-group">
              <label for="nik">NIK</label>
              <input
                type="text"
                class="form-control"
                id="nik"
                placeholder="NIK"
                required
              />
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input
                type="text"
                class="form-control"
                id="alamat"
                placeholder="Alamat"
                required
              />
            </div>
            <div class="form-group">
              <label for="ttl">TTL</label>
              <input
                type="text"
                class="form-control"
                id="ttl"
                placeholder="TTL"
                required
              />
            </div>
            <div class="form-group">
              <label for="umur">Umur</label>
              <input
                type="number"
                class="form-control"
                id="umur"
                placeholder="Umur"
                required
              />
            </div>
            <div class="form-group">
              <label for="bb">Berat Badan</label>
              <input
                type="number"
                class="form-control"
                id="bb"
                placeholder="Berat Badan"
                required
              />
            </div>
            <div class="form-group">
              <label for="golonganDarah">Golongan Darah</label>
              <select class="form-control" id="golonganDarah" required>
                <option value="">Pilih Golongan Darah</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div>

            <div class="form-group">
              <label for="riwayatpenyakit">Riwayat Penyakit</label>
              <input
                type="text"
                class="form-control"
                id="riwayatpenyakit"
                placeholder="Riwayat Penyakit"
                required
              />
            </div>
            <div class="form-group">
              <label for="nohp">No. Hp</label>
              <input
                type="tel"
                class="form-control"
                id="nohp"
                placeholder="No. Hp"
                required
              />
            </div>
            <div class="text-right">
              <a href="donor.html"
                ><button type="submit" class="btn merah">
                  Tambah pendonor
                </button></a
              >
            </div>
          </form>

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
    <script src="../js/donor.js"></script>
  </body>
</html>
