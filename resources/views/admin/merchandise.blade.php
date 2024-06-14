<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Merchandise</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/merchandise.css') }}">
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
            <nav id="sidebarMenu" class="col-lg-3 sidebar bg-danger">
                <ul class="nav flex-column">
                    <li class="nav-item">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('admin.merchandise') }}">Manajemen Merchandise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.orders') }}">Manajemen Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Sign out
        </a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
        
                    </li>
                </ul>
            </nav>
            <main class="main-content col-lg-9 ml-sm-auto col-md-9 pt-3 px-4">
                <h2>Manajemen Merchandise</h2>
                <div class="d-flex justify-content-between mb-3">
                    <button class="btn merah" data-toggle="modal" data-target="#tambahMerchandiseModal">Tambah Merchandise</button>
                </div>
                <table id="merchandiseTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Stock</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($merchandises as $merchandise)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $merchandise->nama_produk }}</td>
                            <td><img src="{{ asset($merchandise->gambar) }}" alt="Gambar Merchandise" width="50"></td>
                            <td>{{ $merchandise->harga }}</td>
                            <td>{{ $merchandise->stock }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="openEditModal({{ $merchandise->merchandise_id }})">Edit</button>
                                <form action="{{ route('admin.merchandise.destroy', $merchandise->merchandise_id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn merah btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </main>
        </div>
    </div>

   <!-- Modal Tambah Merchandise -->
<div class="modal fade" id="tambahMerchandiseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.merchandise.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Merchandise</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-right">                    <button type="submit" class="btn merah">Tambah</button></div>

                </div>
            </form>
        </div>
    </div>
</div>


   <!-- Modal Edit Merchandise -->
<div class="modal fade" id="editMerchandiseModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editMerchandiseForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Merchandise</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="edit_nama_produk" name="nama_produk" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="edit_gambar" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="edit_harga">Harga</label>
                        <input type="number" class="form-control" id="edit_harga" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_stock">Stock</label>
                        <input type="number" class="form-control" id="edit_stock" name="stock" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="edit_deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-right">                    <button type="submit" class="btn merah">Edit</button></div>

                </div>
            </form>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#merchandiseTable').DataTable();
        });

        function openEditModal(merchandise_id) {
    $.get('/admin/merchandise/' + merchandise_id + '/edit', function(data) {
        $('#edit_nama_produk').val(data.nama_produk);
        $('#edit_harga').val(data.harga);
        $('#edit_stock').val(data.stock);
        $('#edit_deskripsi').val(data.deskripsi); // Menambahkan deskripsi
        $('#editMerchandiseForm').attr('action', '/admin/merchandise/' + merchandise_id);
        $('#editMerchandiseModal').modal('show');
    });
}

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
	var sidebarToggle = document.querySelector(".navbar-toggler");
	var sidebar = document.querySelector("#sidebarMenu");

	sidebarToggle.addEventListener("click", function () {
		sidebar.classList.toggle("show");
	});

	var table = $("#userTable").DataTable({
		dom: 't<"bottom"p>',
		pageLength: 10,
		paging: true,
		info: false,
	});

	$("#customSearchButton").on("click", function () {
		table.search($("#customSearchBox").val()).draw();
	});

	$("#customSearchBox").on("keypress", function (e) {
		if (e.which === 13) {
			table.search(this.value).draw();
		}
	});
});
    </script>
</body>
</html>
