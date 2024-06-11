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
    <link rel="stylesheet" href="user/css/pendaftaran.css" />
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
                <a class="nav-link" href="/home">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/pendaftaran">Pendaftaran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user/merchandise">Merchandise</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user/berita">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profile">Profil</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <div class="container mt-4 pt-5">
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <h3>Syarat Donor Darah</h3>
            <ul>
              <li>Sehat jasmani dan rohani</li>
              <li>Usia 17 sampai dengan 65 tahun</li>
              <li>Berat badan minimal 45 kg</li>
              <li>Tekanan Darah: sistole 100 - 170, diastole 70 - 100</li>
              <li>Kadar hemoglobin 12,5g% s/d 17,0g%</li>
              <li>
                Interval donor minimal 12 minggu atau 3 bulan sejak donor darah
                sebelumnya
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3>Jangan Donor Jika</h3>
            <ul>
              <li>Mempunyai penyakit jantung dan paru-paru</li>
              <li>Menderita kanker</li>
              <li>Menderita tekanan darah tinggi (hipertensi)</li>
              <li>Menderita kencing manis (diabetes mellitus)</li>
              <li>
                Memiliki kecenderungan perdarahan abnormal atau kelainan darah
                lainnya
              </li>
              <li>Menderita epilepsi dan sering kejang</li>
              <li>Menderita atau pernah menderita Hepatitis B atau C</li>
              <li>Mengidap sifilis</li>
              <li>Kecanduan narkoba</li>
              <li>Kecanduan minuman beralkohol</li>
              <li>Mengidap atau beresiko tinggi terhadap HIV/AIDS</li>
              <li>
                Dokter menyarankan untuk tidak menyumbangkan darah karena alasan
                kesehatan
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3>Panduan Donor Darah</h3>
            <ul>
              <li>Tidur minimal 4 jam sebelum donor</li>
              <li>
                Makan 3-4 jam sebelum menyumbangkan darah, hindari makanan
                berlemak
              </li>
              <li>
                Minum lebih banyak dari biasanya sebelum mendonor dan 8 jam
                setelah donor
              </li>
              <li>
                Setelah donor beristirahat paling sedikit 10 menit sambil
                menikmati makanan ringan yang tersedia
              </li>
              <li>
                Segera tekan dengan kuat pada bekas jarum selama 2-5 menit untuk
                menghindari bengkak
              </li>
              <li>
                Banyak minum sampai 72 jam ke depan untuk mengembalikan stamina
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="form-section">
        <h2 class="text-center">Form Pendaftaran Donor Darah</h2>
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
              type="date"
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
            <label for="beratBadan">Berat Badan</label>
            <input
              type="number"
              class="form-control"
              id="beratBadan"
              placeholder="Berat Badan"
              required
            />
          </div>
          <div class="form-group">
            <label for="golonganDarah">Golongan Darah</label>
            <select class="form-control" id="golonganDarah" required>
              <option value="">Pilih Golongan Darah</option>
              <option value="Belum Tahu">Belum Tahu</option>
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
            <label for="riwayatPenyakit">Riwayat Penyakit</label>
            <input
              type="text"
              class="form-control"
              id="riwayatPenyakit"
              placeholder="Riwayat Penyakit"
              required
            />
          </div>
          <div class="form-group">
            <label for="noHandphone">No. Handphone</label>
            <input
              type="tel"
              class="form-control"
              id="noHandphone"
              placeholder="No. Handphone"
              required
            />
          </div>
          <div class="form-group">
            <label for="tgldonor">Tanggal Donor</label>
            <input
              type="date"
              class="form-control"
              id="tgldonor"
              placeholder="Tanggal Donor"
              required
            />
          </div>

          <div class="text-right mt-5">
            <a href="#"
              ><button type="submit" class="btn btn-custom">
                Daftar Donor
              </button></a
            >
          </div>
        </form>
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