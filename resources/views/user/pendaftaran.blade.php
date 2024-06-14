<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Donor Darah</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/css/pendaftaran.css') }}">
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
                        <li>Interval donor minimal 12 minggu atau 3 bulan sejak donor darah sebelumnya</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Jangan Donor Jika</h3>
                    <ul>
                        <li>Mempunyai penyakit jantung dan paru-paru</li>
                        <li>Menderita kanker</li>
                        <li>Menderita tekanan darah tinggi (hipertensi)</li>
                        <li>Menderita kencing manis (diabetes mellitus)</li>
                        <li>Memiliki kecenderungan perdarahan abnormal atau kelainan darah lainnya</li>
                        <li>Menderita epilepsi dan sering kejang</li>
                        <li>Menderita atau pernah menderita Hepatitis B atau C</li>
                        <li>Mengidap sifilis</li>
                        <li>Kecanduan narkoba</li>
                        <li>Kecanduan minuman beralkohol</li>
                        <li>Mengidap atau beresiko tinggi terhadap HIV/AIDS</li>
                        <li>Dokter menyarankan untuk tidak menyumbangkan darah karena alasan kesehatan</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Panduan Donor Darah</h3>
                    <ul>
                        <li>Tidur minimal 4 jam sebelum donor</li>
                        <li>Makan 3-4 jam sebelum menyumbangkan darah, hindari makanan berlemak</li>
                        <li>Minum lebih banyak dari biasanya sebelum mendonor dan 8 jam setelah donor</li>
                        <li>Setelah donor beristirahat paling sedikit 10 menit sambil menikmati makanan ringan yang tersedia</li>
                        <li>Segera tekan dengan kuat pada bekas jarum selama 2-5 menit untuk menghindari bengkak</li>
                        <li>Banyak minum sampai 72 jam ke depan untuk mengembalikan stamina</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="form-section">
            <h2 class="text-center">Form Pendaftaran Donor Darah</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('user.pendaftaran') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $user->name) }}" required>
                </div>
                <div class="form-group">
                    <label for="NIK">NIK</label>
                    <input type="text" class="form-control" id="NIK" name="NIK" value="{{ old('NIK') }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" required>{{ old('alamat', $user->alamat) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir', $user->tgl_lahir) }}" required>
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur" value="{{ old('umur') }}" required>
                </div>
                <div class="form-group">
                    <label for="berat_badan">Berat Badan</label>
                    <input type="number" class="form-control" id="berat_badan" name="berat_badan" value="{{ old('berat_badan') }}" required>
                </div>
                <div class="form-group">
                    <label for="gol_darah">Golongan Darah</label>
                    <select class="form-control" id="gol_darah" name="gol_darah" required>
                        <option value="">Pilih Golongan Darah</option>
                        <option value="A+" {{ old('gol_darah', $user->bloodType) == 'A+' ? 'selected' : '' }}>A+</option>
                        <option value="A-" {{ old('gol_darah', $user->bloodType) == 'A-' ? 'selected' : '' }}>A-</option>
                        <option value="B+" {{ old('gol_darah', $user->bloodType) == 'B+' ? 'selected' : '' }}>B+</option>
                        <option value="B-" {{ old('gol_darah', $user->bloodType) == 'B-' ? 'selected' : '' }}>B-</option>
                        <option value="O+" {{ old('gol_darah', $user->bloodType) == 'O+' ? 'selected' : '' }}>O+</option>
                        <option value="O-" {{ old('gol_darah', $user->bloodType) == 'O-' ? 'selected' : '' }}>O-</option>
                        <option value="AB+" {{ old('gol_darah', $user->bloodType) == 'AB+' ? 'selected' : '' }}>AB+</option>
                        <option value="AB-" {{ old('gol_darah', $user->bloodType) == 'AB-' ? 'selected' : '' }}>AB-</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="riwayat">Riwayat Penyakit</label>
                    <input type="text" class="form-control" id="riwayat" name="riwayat" value="{{ old('riwayat') }}" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">No. Handphone</label>
                    <input type="tel" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required>
                </div>
                <div class="form-group">
                    <label for="tgl_donor">Tanggal Donor</label>
                    <input type="date" class="form-control" id="tgl_donor" name="tgl_donor" value="{{ old('tgl_donor') }}" required>
                </div>
                <div class="text-right mt-5">
                    <button type="submit" class="btn btn-custom">Daftar Donor</button>
                </div>
            </form>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</body>
</html>
