<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manajemen Pesanan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/merchandise.css') }}">
    <link rel="icon" href="{{ asset('img/merah.png') }}" type="image/x-icon" >
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <button class="navbar-toggler" type="button" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-2" href="#">
            <img src="{{ asset('img/putih.png') }}" width="80px"/>
        </a>
    </nav>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-lg-3 col-md-3 sidebar bg-danger">
            <ul class="nav flex-column">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('admin.index') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users') }}">Manajemen User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.donor') }}">Manajemen Donor Darah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.stock') }}">Manajemen Stock Darah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.berita') }}">Manajemen Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.merchandise') }}">Manajemen Merchandise</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.orders') }}">Manajemen Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Keluar
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <main class="main-content col-lg-9 ml-sm-auto col-md-9 pt-3 px-4">
            <h2>Manajemen Pesanan</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <table id="orderTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No. Pesanan</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->merchandise->nama_produk }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->price }}</td>
                            <td>{{ $order->total_price }}</td>
                            <td>{{ $order->status }}</td>
                            <td>
                                @if($order->proof_of_payment)
                                    <a href="{{ asset('proofs/' . $order->proof_of_payment) }}" target="_blank">Lihat Bukti</a>
                                @else
                                    Belum diunggah
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editOrderModal{{ $order->id }}">Edit</button>
                                <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn merah btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal Edit Order -->
                        <div class="modal fade" id="editOrderModal{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="editOrderModalLabel{{ $order->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editOrderModalLabel{{ $order->id }}">Edit Order</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status" required>
                                                    <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="Waiting for approval" {{ $order->status == 'Waiting for approval' ? 'selected' : '' }}>Waiting for approval</option>
                                                    <option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>Processing</option>
                                                    <option value="Shipped" {{ $order->status == 'Shipped' ? 'selected' : '' }}></option>
                                                    <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                                    <option value="Cancelled" {{ $order->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                </select>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#orderTable').DataTable();
    });
</script>
<script>
    
    document.addEventListener("DOMContentLoaded", function () {
    var sidebarToggle = document.querySelector(".navbar-toggler");
    var sidebar = document.querySelector("#sidebarMenu");

    sidebarToggle.addEventListener("click", function () {
        sidebar.classList.toggle("show");
    });
});
</script>
</body>
</html>
