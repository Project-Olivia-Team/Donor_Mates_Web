<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/index.css') }}">
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
                    <li class="nav-item active">
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Grafik Data Pendonor</div>
                            <div class="card-body">
                                <canvas id="donorChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
               
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
          var sidebarToggle = document.querySelector(".navbar-toggler");
          var sidebar = document.querySelector("#sidebarMenu");
  
          sidebarToggle.addEventListener("click", function () {
              sidebar.classList.toggle("show");
          });
  
          $.ajax({
              url: "{{ route('admin.getDonorData') }}",
              method: 'GET',
              success: function(data) {
                  var ctx = document.getElementById('donorChart').getContext('2d');
                  var donorChart = new Chart(ctx, {
                      type: 'bar',
                      data: {
                          labels: data.map(item => item.month + ' ' + item.year),
                          datasets: [{
                              label: 'Jumlah Pendonor',
                              data: data.map(item => item.count),
                              backgroundColor: 'rgba(54, 162, 235, 0.2)',
                              borderColor: 'rgba(54, 162, 235, 1)',
                              borderWidth: 1
                          }]
                      },
                      options: {
                          scales: {
                              y: {
                                  beginAtZero: true
                              }
                          }
                      }
                  });
              }
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
