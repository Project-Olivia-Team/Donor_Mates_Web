<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Keranjang Belanja</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="user/css/keranjang.css" />
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
              <li class="nav-item">
                <a class="nav-link" href="/pendaftaran">Pendaftaran</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/user/merchandise">Merchandise</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user/berita">Berita</a>
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
      <h2 class="text-center mb-5">Keranjang Belanja</h2>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img src="../../img/baju.jpg" alt="Kaos" width="50" />
                  Kaos
                </td>
                <td>Rp.50.000</td>
                <td>
                  <button
                    class="btn btn-sm btn-secondary"
                    onclick="decreaseQuantity(this)"
                  >
                    -
                  </button>
                  <span>1</span>
                  <button
                    class="btn btn-sm btn-secondary"
                    onclick="increaseQuantity(this)"
                  >
                    +
                  </button>
                </td>
                <td>Rp.50.000</td>
                <td><button class="btn merah btn-sm">Hapus</button></td>
              </tr>
              <tr>
                <td>
                  <img src="../../img/baju.jpg" alt="Produk Lain" width="50" />
                  Produk Lain
                </td>
                <td>Rp.50.000</td>
                <td>
                  <button
                    class="btn btn-sm btn-secondary"
                    onclick="decreaseQuantity(this)"
                  >
                    -
                  </button>
                  <span>2</span>
                  <button
                    class="btn btn-sm btn-secondary"
                    onclick="increaseQuantity(this)"
                  >
                    +
                  </button>
                </td>
                <td>Rp.100.000</td>
                <td><button class="btn merah btn-sm">Hapus</button></td>
              </tr>
            </tbody>
          </table>
          <div class="text-right">
            <h4>Total: Rp.150.000</h4>
            <a href="/co" class="btn merah">Checkout</a>
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
    <script>
      function decreaseQuantity(button) {
        let quantityElement = button.nextElementSibling;
        let quantity = parseInt(quantityElement.textContent);
        if (quantity > 1) {
          quantityElement.textContent = quantity - 1;
          updateTotal(button, quantity - 1);
        }
      }

      function increaseQuantity(button) {
        let quantityElement = button.previousElementSibling;
        let quantity = parseInt(quantityElement.textContent);
        quantityElement.textContent = quantity + 1;
        updateTotal(button, quantity + 1);
      }

      function updateTotal(button, newQuantity) {
        let priceElement = button.parentElement.previousElementSibling;
        let price = parseInt(
          priceElement.textContent.replace("Rp.", "").replace(".", "")
        );
        let totalElement = button.parentElement.nextElementSibling;
        let newTotal = price * newQuantity;
        totalElement.textContent = "Rp." + newTotal.toLocaleString("id-ID");

        let grandTotal = 0;
        document.querySelectorAll("tbody tr").forEach((row) => {
          let rowTotal = parseInt(
            row
              .querySelector("td:nth-child(4)")
              .textContent.replace("Rp.", "")
              .replace(".", "")
          );
          grandTotal += rowTotal;
        });
        document.querySelector(".text-right h4").textContent =
          "Total: Rp." + grandTotal.toLocaleString("id-ID");
      }
    </script>
  </body>
</html>