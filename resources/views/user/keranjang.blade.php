<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('user/css/keranjang.css') }}">

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
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('user.merchandise') }}">Merchandise</a>
                        </li>
                        <li class="nav-item">
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
        <h2 class="text-center">Keranjang Belanja</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
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
                @forelse($cartItems as $item)
                    <tr>
                        <td>{{ $item->merchandise->nama_produk }}</td>
                        <td>Rp. {{ $item->merchandise->harga }}</td>
                        <td>
                            <form action="{{ route('cart.update', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="button" class="btn btn-sm btn-secondary" onclick="updateQuantity({{ $item->id }}, {{ $item->quantity - 1 }})" {{ $item->quantity == 1 ? 'disabled' : '' }}>-</button>
                                <input type="text" name="quantity" value="{{ $item->quantity }}" readonly class="text-center" style="width: 40px; border: none;">
                                <button type="button" class="btn btn-sm btn-secondary" onclick="updateQuantity({{ $item->id }}, {{ $item->quantity + 1 }})">+</button>
                            </form>
                        </td>
                        <td>Rp. {{ $item->merchandise->harga * $item->quantity }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Keranjang Anda kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if($cartItems->count() > 0)
            <div class="text-right">
                <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
            </div>
        @endif
    </div>

    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer-column">
                    <img src="{{ asset('img/putih.png') }}" width="80px" />
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
        function updateQuantity(id, quantity) {
            $.ajax({
                url: "{{ url('cart/update') }}/" + id,
                type: 'PATCH',
                data: {
                    _token: "{{ csrf_token() }}",
                    quantity: quantity
                },
                success: function(response) {
                    location.reload();
                }
            });
        }
    </script>
</body>
</html>
