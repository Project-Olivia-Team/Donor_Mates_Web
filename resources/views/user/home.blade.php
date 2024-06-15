<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('user/css/home.css') }}">
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
    

    <div class="hero-section">
        <div class="content text-left">
            <h1>Ikut Donor Darah, Bantu Selamatkan Nyawa</h1>
            <p>Setiap tetes darah yang Anda sumbangkan bisa menjadi penyelamat bagi nyawa seseorang, memberikan harapan dan kesempatan baru untuk hidup. Donor darah bukan hanya tindakan kemanusiaan, tetapi juga bentuk nyata dari solidaritas dan kepedulian sosial. Bergabunglah dengan gerakan donor darah, dengan donor darah kita bisa menciptakan perubahan besar dalam kehidupan banyak orang.</p>
        </div>
    </div>

    <!-- Manfaat Donor Darah -->
    <div class="container manfaat-donor my-5 text-center">
        <h2>Apa Sih Manfaat Donor Darah?</h2>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                <div class="card manfaat-card">
                    <img src="../../img/turunbb.png" class="card-img-top" alt="Menurunkan berat badan"/>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Menurunkan berat badan</h5>
                    <p class="card-text">Donor darah dapat membantu menurunkan berat badan karena prosesnya membakar kalori.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                <div class="card manfaat-card">
                    <img src="../../img/jagakesehtan.png" class="card-img-top" alt="Menjaga kesehatan"/>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Menjaga kesehatan</h5>
                    <p class="card-text">Darah yang hilang digantikan dengan darah baru, dan dapat meningkatkan kesehatan sistem kardiovaskular.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                <div class="card manfaat-card">
                    <img src="../../img/produksidarah.png" class="card-img-top" alt="Meningkatkan produksi darah"/>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Meningkatkan produksi darah</h5>
                    <p class="card-text">Ketika darah didonorkan, tubuh akan segera bekerja untuk menggantikan darah yang hilang.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Stock Darah -->
    <div class="container my-5 stock-darah">
        <h2 class="text-center">Stock Darah</h2>
        <div class="stock-container">
            <div class="box-container">
                @foreach($stocks as $stock)
                <div class="box">
                    <p >{{ $stock->golongan_darah }}</p>
                    <p >{{ $stock->stock }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- TIPS -->
    <div class="container tips my-5">
        <h2 class="text-center">6 Tips Donor Darah Sehat</h2>
        <div class="row text-center">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card tips-card">
                    <div class="card-body">
                        <h5 class="card-title">Cukup istirahat sebelum menyumbangkan darah</h5>
                        <p class="card-text">Pastikan Anda mendapatkan tidur yang cukup sebelum mendonorkan darah. Istirahat yang cukup membantu menjaga kondisi tubuh tetap fit dan siap untuk mendonorkan darah.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card tips-card">
                    <div class="card-body">
                        <h5 class="card-title">Makan tiga jam sebelum menyumbangkan darah</h5>
                        <p class="card-text">Disarankan untuk makan makanan bergizi setidaknya tiga jam sebelum mendonorkan darah. Hindari makanan berlemak tinggi dan pastikan Anda merasa kenyang namun nyaman.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card tips-card">
                    <div class="card-body">
                        <h5 class="card-title">Cukup minum sebelum dan sesudah menyumbangkan darah</h5>
                        <p class="card-text">Minum banyak air sebelum dan setelah donor darah untuk menjaga tubuh tetap terhidrasi. Hal ini membantu proses pemulihan dan mencegah terjadinya dehidrasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card tips-card">
                    <div class="card-body">
                        <h5 class="card-title">Beristirahat setelah mendonorkan darah</h5>
                        <p class="card-text">Setelah mendonorkan darah, duduk dan istirahat selama beberapa menit. Jangan terburu-buru melakukan aktivitas fisik yang berat untuk memberi waktu bagi tubuh memulihkan diri.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card tips-card">
                    <div class="card-body">
                        <h5 class="card-title">Konsultasi kesehatan dengan dokter</h5>
                        <p class="card-text">Sebelum mendonorkan darah, konsultasikan kondisi kesehatan Anda dengan dokter. Pastikan Anda dalam kondisi sehat dan memenuhi syarat untuk dapat melakukan donorkan darah.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card tips-card">
                    <div class="card-body">
                        <h5 class="card-title">Hindari aktivitas berat setelah donor darah</h5>
                        <p class="card-text">Setelah mendonorkan darah, hindari aktivitas berat atau olahraga yang berlebihan selama setidaknya 24 jam. Tunggu terlebih dahulu dan biarkan tubuh Anda normal pulih sepenuhnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container sponsor my-5 text-center">
        <h2>Disponsori Oleh</h2>
        <div class="row justify-content-center">
            <div class="col-md-2 col-sm-4 mb-4">
                <div class="sponsor-logo">
                    <img src="../../img/pmi.png" class="img-fluid" alt="Sponsor 1"/>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 mb-4">
                <div class="sponsor-logo">
                    <img src="../../img/pmi.png" class="img-fluid" alt="Sponsor 2"/>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 mb-4">
                <div class="sponsor-logo">
                    <img src="../../img/pmi.png" class="img-fluid" alt="Sponsor 3"/>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 mb-4">
                <div class="sponsor-logo">
                    <img src="../../img/pmi.png" class="img-fluid" alt="Sponsor 4"/>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 mb-4">
                <div class="sponsor-logo">
                    <img src="../../img/pmi.png" class="img-fluid" alt="Sponsor 5"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
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

    <!-- Chatbot -->
    <button onclick="toggleChatbot()" class="chatbot-button">
        <i class="fa fa-comments"></i>
      </button>
      <div id="chatbot" class="chat-popup">
        <div class="chatbot-header">
          <h2 class="text-center">Matesbot</h2>
          <span class="close" onclick="toggleChatbot()">&times;</span>
        </div>
        <div class="chatbot-content">
          <div class="chat-message bot-message">
            Selamat datang di Donormates Chatbot! Apa yang bisa saya bantu?
          </div>
        </div>
        <div class="chatbot-footer">
          <input
            type="text"
            placeholder="Ketikkan pesanmu..."
            id="chat-input"
            name="message"
            required
          />
          <button type="button" class="send-btn" onclick="sendMessage()">
            Kirim
          </button>
        </div>
      </div>
  
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
      <script>
        function toggleChatbot() {
          var chatbot = document.getElementById("chatbot");
          chatbot.style.display =
            chatbot.style.display === "block" ? "none" : "block";
        }
  
        async function sendMessage() {
            const inputField = document.getElementById("chat-input");
            const message = inputField.value;
            if (message.trim() === "") return;

            displayMessage(message, "user-message");

            const response = await getChatbotResponse(message);
            displayMessage(response, "bot-message");

            inputField.value = "";
        }

        function displayMessage(message, className) {
            const chatContent = document.getElementById("chatbot-content");
            const messageElement = document.createElement("div");
            messageElement.className = chat-message ${className};
            messageElement.textContent = message;
            chatContent.appendChild(messageElement);
            chatContent.scrollTop = chatContent.scrollHeight;

        }
      </script>
    </body>
  </html>