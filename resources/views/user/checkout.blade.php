<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Checkout</h2>
    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="phone">Nomor Telepon</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
        </div>
        <div class="form-group">
            <label for="shipping">Jasa Kirim</label>
            <select class="form-control" id="shipping" name="shipping" required>
                <option value="JNE">JNE</option>
                <option value="TIKI">TIKI</option>
                <option value="POS">POS Indonesia</option>
                <option value="Gojek">Gojek</option>
            </select>
        </div>
        <div class="form-group">
            <label for="payment_method">Metode Pembayaran</label>
            <select class="form-control" id="payment_method" name="payment_method" required>
                <option value="bank_transfer">Bank Transfer</option>
                <option value="credit_card">Credit Card</option>
                <option value="e_wallet">E-Wallet</option>
            </select>
        </div>
        <div class="form-group">
            <label for="total">Total Bayar</label>
            <input type="number" class="form-control" id="total" name="total" value="{{ $total }}" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
