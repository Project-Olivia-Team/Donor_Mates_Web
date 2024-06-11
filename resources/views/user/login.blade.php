<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="guest/css/login.css" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 login-form">
          <div class="form-container">
            <h2 class="text-center">Login</h2>
            <form id="loginForm" method="POST" action="/login">
              @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
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
                  name="password"
                  placeholder="Password"
                  required
                />
              </div>
              <button type="submit" class="btn btn-block btn-primary">Login</button>
              <p class="text-center mt-3">
                Belum punya akun? <a href="/register">Register</a>
              </p>
            </form>
          </div>
        </div>
        <div class="col-md-6 login-image d-none d-md-flex"></div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
