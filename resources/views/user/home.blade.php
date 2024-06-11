<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('user/css/home.css') }}">
    <style>
      /* Gaya tambahan di dalam halaman */
      .box-container {
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
      }
      .stock-container p {
    font-size: 24px; /* Atur ukuran font */
    font-weight: bold; /* Jadikan teks tebal */
}
      .box {
          background-color: #ae252c;
          color: white;
          border-radius: 10px;
          padding: 20px;
          margin: 10px;
          width: 100px;
          text-align: center;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      @media (max-width: 768px) {
          .box {
              width: 80px;
          }
      }

      @media (max-width: 576px) {
          .box {
              width: 60px;
          }
      }
      .chatbot-button {
    background-color: #ae252c;
    color: white;
    padding: 16px;
    border: 2px solid white;
    cursor: pointer;
    position: fixed;
    bottom: 23px;
    right: 28px;
    border-radius: 50%;
    font-size: 24px;
    z-index: 1000;
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.chat-popup {
    display: none;
    position: fixed;
    bottom: 80px;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
    background-color: white;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    width: 300px;
}

.chatbot-header {
    background-color: #ae252c;
    color: white;
    padding: 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.close {
    color: white;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
}

.chatbot-content {
    padding: 18px;
    background-color: #f9f9f9;
    height: 300px;
    overflow-y: scroll;
}

.chatbot-footer {
    padding: 12px 20px;
    background-color: #f9f9f9;
    display: flex;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

input[type="text"] {
    width: 80%;
    padding: 10px;
    margin: 0;
    border: none;
    border-radius: 5px;
}

.send-btn {
    width: 20%;
    background-color: #ae252c;
    color: white;
    padding: 10px;
    margin-left: 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.chat-message {
    padding: 10px;
    margin: 10px 0;
    border-radius: 10px;
}

.user-message {
    background-color: #e1ffc7;
    text-align: right;
}

.bot-message {
    background-color: #f1f1f1;
}
  </style>
  </head>
<body>
    <header class="header fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="../../img/putih.png" width="80px"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('user.home') }}">Home</a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="profil.html">Profil</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="hero-section">
        <div class="content text-left">
            <h1>Ikut Donor Darah, Bantu Selamatkan Nyawa</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt, dolor nesciunt quia dolores hic asperiores molestiae sering quo consectetur officia illum aliquid libero, doloribus, nostrum reiciendis ab! Sapiente accusantium ipsam inventore suscipit explicabo! Esse sint dicta libero deserunt eaque amet autem! Enim error quod autem.</p>
            <a href="#"><button>See more</button></a>
        </div>
    </div>

    <!-- Manfaat Donor Darah -->
    <div class="container manfaat-donor my-5 text-center">
        <h2>Apa sih manfaat donor darah?</h2>
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
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi magnam fuga dolore ratione ea repellendus quasi eum vel inventore labore!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card tips-card">
                    <div class="card-body">
                        <h5 class="card-title">Makan tiga jam sebelum menyumbangkan darah</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi magnam fuga dolore ratione ea repellendus quasi eum vel inventore labore!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card tips-card">
                    <div class="card-body">
                        <h5 class="card-title">Cukup Minum Setelah dan sesudah menyumbangkan darah</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi magnam fuga dolore ratione ea repellendus quasi eum vel inventore labore!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card tips-card">
                    <div class="card-body">
                        <h5 class="card-title">Beristirahat setelah mendonorkan darah</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi magnam fuga dolore ratione ea repellendus quasi eum vel inventore labore!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card tips-card">
                    <div class="card-body">
                        <h5 class="card-title">Konsultasi kesehatan dengan dokter</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi magnam fuga dolore ratione ea repellendus quasi eum vel inventore labore!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card tips-card">
                    <div class="card-body">
                        <h5 class="card-title">Konsultasi kesehatan dengan dokter</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi magnam fuga dolore ratione ea repellendus quasi eum vel inventore labore!</p>
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
            <input type="text" placeholder="Ketikkan pesanmu..." id="chat-input" name="message" required/>
            <button type="button" class="send-btn" onclick="sendMessage()">Kirim</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function toggleChatbot() {
            var chatbot = document.getElementById("chatbot");
            chatbot.style.display = chatbot.style.display === "block" ? "none" : "block";
        }

        function sendMessage() {
            var inputField = document.getElementById("chat-input");
            var message = inputField.value;
            if (message.trim() !== "") {
                var chatContent = document.querySelector(".chatbot-content");

                var userMessage = document.createElement("div");
                userMessage.className = "chat-message user-message";
                userMessage.textContent = message;
                chatContent.appendChild(userMessage);

                inputField.value = "";

                setTimeout(function() {
                    var botMessage = document.createElement("div");
                    botMessage.className = "chat-message bot-message";
                    botMessage.textContent = "Terima kasih atas pesan Anda. Kami akan segera merespons.";
                    chatContent.appendChild(botMessage);

                    chatContent.scrollTop = chatContent.scrollHeight;
                }, 1000);
            }
        }
    </script>
</body>
</html>
