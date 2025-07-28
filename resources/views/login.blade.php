<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Page - MyKRS</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">MyKRS</a>
    </div>
  </nav>

  <!-- Login Form -->
<div class="d-flex justify-content-center align-items-center vh-100">
  <div class="col-md-4">
    <div class="card shadow">
      <div class="card-body">
        <h2 class="mb-4 text-center">Login</h2>

        <form method="POST" action="/login">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>

          <div class="mb-3">
            <label for="role" class="form-label">Sebagai</label>
            <select class="form-select" id="role" name="role" required>
              <option selected disabled>Pilih peran</option>
              <option value="student">Student</option>
              <option value="teacher">Teacher</option>
              <option value="Admin">Admin</option>
            </select>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- Footer -->
  <footer class="bg-light text-center text-muted mt-5 py-3">
    <div class="container">
      &copy; 2025 MyKRS App. Semua hak dilindungi.
    </div>
  </footer>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
