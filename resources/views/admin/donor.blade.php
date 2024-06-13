<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/donor.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <button class="navbar-toggler" type="button" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-2" href="#">LOGO</a>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-lg-3 sidebar bg-danger">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
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
                <h2>Manajemen Donor Darah</h2>
                <div class="tambah-search d-flex justify-content-between mb-3">
                    <button class="btn merah" data-toggle="modal" data-target="#tambahDonorModal">Tambah pendonor</button>
                    
                </div>
                <table id="userTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Golongan Darah</th>
                            <th>Tanggal Donor</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donors as $donor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $donor->nama }}</td>
                            <td>{{ $donor->gol_darah }}</td>
                            <td>{{ $donor->created_at->format('d/m/Y') }}</td>
                            <td class="btn-aksi">
                                <button class="btn btn-primary btn-sm" onclick="openEditModal({{ $donor->donor_id }})">Edit</button>
                                <form action="{{ route('admin.donor.destroy', $donor->donor_id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn merah btn-sm">Delete</button>
                                </form>
                                <a href="{{ route('admin.donor.detail', $donor->donor_id) }}"><button class="btn btn-success btn-sm">Detail</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <!-- Modal Tambah Donor -->
    <div class="modal fade" id="tambahDonorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('admin.donor.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Donor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="NIK">NIK</label>
                            <input type="text" class="form-control" id="NIK" name="NIK" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" class="form-control" id="umur" name="umur" required>
                        </div>
                        <div class="form-group">
                            <label for="berat_badan">Berat Badan</label>
                            <input type="number" class="form-control" id="berat_badan" name="berat_badan" required>
                        </div>
                        <div class="form-group">
                            <label for="gol_darah">Golongan Darah</label>
                            <input type="text" class="form-control" id="gol_darah" name="gol_darah" required>
                        </div>
                        <div class="form-group">
                            <label for="riwayat">Riwayat</label>
                            <textarea class="form-control" id="riwayat" name="riwayat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                        <div class="form-group">
                          <label for="tgl_donor">Tanggal Donor</label>
                          <input type="date" class="form-control" id="tgl_lahir" name="tgl_donor" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Donor -->
    <div class="modal fade" id="editDonorModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editDonorForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Donor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_NIK">NIK</label>
                            <input type="text" class="form-control" id="edit_NIK" name="NIK" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_nama">Nama</label>
                            <input type="text" class="form-control" id="edit_nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_alamat">Alamat</label>
                            <textarea class="form-control" id="edit_alamat" name="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit_tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="edit_tgl_lahir" name="tgl_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_umur">Umur</label>
                            <input type="number" class="form-control" id="edit_umur" name="umur" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_berat_badan">Berat Badan</label>
                            <input type="number" class="form-control" id="edit_berat_badan" name="berat_badan" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_gol_darah">Golongan Darah</label>
                            <input type="text" class="form-control" id="edit_gol_darah" name="gol_darah" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_riwayat">Riwayat</label>
                            <textarea class="form-control" id="edit_riwayat" name="riwayat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit_no_hp">No HP</label>
                            <input type="text" class="form-control" id="edit_no_hp" name="no_hp" required>
                        </div>
                        <div class="form-group">
                          <label for="edit_tgl_donor">Tanggal Donor</label>
                          <input type="date" class="form-control" id="edit_tgl_donor" name="tgl_donor" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
            $('#userTable').DataTable();
        });

        function openEditModal(donor_id) {
            $.get('/admin/donor/' + donor_id + '/edit', function(data) {
                $('#edit_NIK').val(data.NIK);
                $('#edit_nama').val(data.nama);
                $('#edit_alamat').val(data.alamat);
                $('#edit_tgl_lahir').val(data.tgl_lahir);
                $('#edit_umur').val(data.umur);
                $('#edit_berat_badan').val(data.berat_badan);
                $('#edit_gol_darah').val(data.gol_darah);
                $('#edit_riwayat').val(data.riwayat);
                $('#edit_no_hp').val(data.no_hp);
                $('#editDonorForm').attr('action', '/admin/donor/' + donor_id);
                $('#editDonorModal').modal('show');
            });
        }
    </script>
</body>
</html>
