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
    <link rel="stylesheet" href="../css/user.css" />
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
      <a class="navbar-brand ml-2" href="#">LOGO</a>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-lg-3 sidebar bg-danger">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Dashboard</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="user.html">Manajemen User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="donor.html">Manajemen Donor Darah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="berita.html">Manajemen Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="merchandise.html"
                >Manajemen Merchandise</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Sign out</a>
            </li>
          </ul>
        </nav>
        <main class="main-content col-lg-9 ml-sm-auto col-md-9 pt-3 px-4">
          <h2>Edit User</h2>
          <form id="userForm">
            <div class="form-group">
              <label for="fotoProfil">Foto Profil</label>
              <input
                type="file"
                class="form-control-file"
                id="fotoProfil"
                required
              />
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input
                type="text"
                class="form-control"
                id="nama"
                placeholder="Nama"
                required
              />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Email"
                required
              />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Password"
                required
              />
            </div>
            <div class="form-group">
              <label for="level">Level</label>
              <select class="form-control" id="level">
                <option>administrator</option>
                <option>user</option>
              </select>
            </div>
            <div class="text-right">
              <a href="user.html"
                ><button type="submit" id="" class="btn tambah-user">
                  Edit user
                </button></a
              >
            </div>
          </form>

          <footer class="footer">
            <hr />
            <p class="copyright">
              &copy; 2024 Donormates. All rights reserved.
            </p>
          </footer>
        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/user.js"></script>
  </body>
</html>
