<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/donor.css') }}">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('admin.stock') }}">Manajemen Stock Darah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.berita') }}">Manajemen Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.merchandise') }}">Manajemen Merchandise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.orders') }}">Manajemen Order</a>
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
                <h2>Manajemen Stock Darah</h2>
                <div class="tambah-search d-flex justify-content-between mb-3">
                    <button class="btn merah" data-toggle="modal" data-target="#tambahStockModal">Tambah Stock</button>
                </div>
                <table id="stockTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Golongan Darah</th>
                            <th>Stock</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stocks as $stock)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $stock->golongan_darah }}</td>
                            <td>{{ $stock->stock }}</td>
                            <td class="btn-aksi">
                                <button class="btn btn-primary btn-sm" onclick="openEditModal({{ $stock->stock_id }})">Edit</button>
                                <form action="{{ route('admin.stock.destroy', $stock->stock_id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn merah btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <!-- Modal Tambah Stock -->
    <div class="modal fade" id="tambahStockModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('admin.stock.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Stock</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="golongan_darah">Golongan Darah</label>
                            <select class="form-control" id="golongan_darah" name="golongan_darah" required>
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
                            <label for="stock">Stock Darah</label>
                            <input type="number" class="form-control" id="stock" name="stock" required>
                        </div>
                    </div>
                    <div class="modal-footer">
       <div class="text-right">                 <button type="submit" class="btn merah">Tambah</button></div>
       
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Stock -->
    <div class="modal fade" id="editStockModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editStockForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Stock</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_golongan_darah">Golongan Darah</label>
                            <select class="form-control" id="edit_golongan_darah" name="golongan_darah" required>
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
                            <label for="edit_stock">Stock</label>
                            <input type="number" class="form-control" id="edit_stock" name="stock" required>
                        </div>
                    </div>
                    <div class="modal-footer">
         <div class="text-right"><button type="submit" class="btn merah">Edit</button></div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#stockTable').DataTable();
        });

        function openEditModal(stock_id) {
            $.get('/admin/stock/' + stock_id + '/edit', function(data) {
                $('#edit_golongan_darah').val(data.golongan_darah);
                $('#edit_stock').val(data.stock);
                $('#editStockForm').attr('action', '/admin/stock/' + stock_id);
                $('#editStockModal').modal('show');
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
