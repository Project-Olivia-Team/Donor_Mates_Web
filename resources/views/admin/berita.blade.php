<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin Dashboard</title>
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"
        />
        <link rel="stylesheet" href="{{ asset('admin/css/berita.css') }}" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <button
                class="navbar-toggler"
                type="button"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
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
                        <li class="nav-item active">
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
                <main
                    class="main-content col-lg-9 ml-sm-auto col-md-9 pt-3 px-4"
                >
                    <h2>Manajemen Berita</h2>
                    <div
                        class="tambah-search d-flex justify-content-between mb-3"
                    >
                        <a href="#">
                            <button class="btn merah" data-toggle="modal" data-target="#tambahBeritaModal">Tambah berita</button></a
                        >
                       
                    </div>
                    <table id="userTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Tanggal Upload</th>
                                <th>Penulis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($beritas as $berita)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $berita->judul }}</td>
                                <td><img src="{{ asset($berita->gambar) }}" alt="Gambar Berita" width="50"></td>
                                <td>{{ $berita->tanggal_upload }}</td>
                                <td>{{ $berita->penulis }}</td>
                                <td class="btn-aksi">
                                    <button class="btn btn-warning btn-sm" onclick="openEditModal({{ $berita->berita_id }})">Edit</button>
                                    
                                    <form action="{{ route('admin.berita.destroy', $berita->berita_id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn merah btn-sm" onclick="return confirm('Are you sure you want to delete this berita?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>

                    <footer class="footer">
                        <hr />
                        <p class="copyright">
                            &copy; 2024 Donormates. All rights reserved.
                        </p>
                    </footer>
                </main>
            </div>
        </div>

        <!-- Modal -->
<div class="modal fade" id="tambahBeritaModal" tabindex="-1" role="dialog" aria-labelledby="tambahBeritaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahBeritaModalLabel">Tambah Berita</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form Tambah Berita -->
          <form method="post" action="{{ route('admin.berita.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul berita">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="form-group">
                <label for="tanggal_upload">Tanggal Upload</label>
                <input type="date" class="form-control" id="tanggal_upload" name="tanggal_upload">
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan nama penulis">
            </div>
            <div class="form-group">
                <label for="isi_berita">Isi Berita</label>
                <textarea class="form-control" id="isi_berita" name="isi_berita" rows="5" placeholder="Masukkan isi berita"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
        </form>
        </div>
        
      </div>
    </div>
  </div>

  
  <!-- Modal Edit Berita -->
<div class="modal fade" id="editBeritaModal" tabindex="-1" role="dialog" aria-labelledby="editBeritaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBeritaModalLabel">Edit Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Edit Berita -->
                <form id="editBeritaForm" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editBeritaId" name="berita_id">
                    <div class="form-group">
                        <label for="editJudul">Judul</label>
                        <input type="text" class="form-control" id="editJudul" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="editGambar">Choose Photo</label>
                        <input type="file" class="form-control" id="editGambar" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="editTanggalUpload">Tanggal Upload</label>
                        <input type="date" class="form-control" id="editTanggalUpload" name="tanggal_upload">
                    </div>
                    <div class="form-group">
                        <label for="editPenulis">Penulis</label>
                        <input type="text" class="form-control" id="editPenulis" name="penulis">
                    </div>
                    <div class="form-group">
                        <label for="editIsiBerita">Isi Berita</label>
                        <textarea class="form-control" id="editIsiBerita" name="isi_berita" rows="5"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

  
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="public/frontend/admin/js/donor.js"></script>
        <script>
            $(document).ready(function() {
                $('#userTable').DataTable();
            });
        </script>
<script>
    function openEditModal(beritaId) {
       
        $.ajax({
            url: '/admin/berita/' + beritaId + '/edit',
            method: 'GET',
            success: function(data) {
      
                $('#editBeritaForm').attr('action', '/admin/berita/' + beritaId);  
                $('#editBeritaId').val(data.berita_id);
                $('#editJudul').val(data.judul);
                $('#editTanggalUpload').val(data.tanggal_upload);
                $('#editPenulis').val(data.penulis);
                $('#editIsiBerita').val(data.isi_berita);
                $('#editBeritaModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', status, error);
            }
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
