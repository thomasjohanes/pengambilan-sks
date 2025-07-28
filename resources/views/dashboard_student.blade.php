<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Lengkapi Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }
        .form-card {
            width: 100%;
            max-width: 500px;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="form-card text-center">
        <h2 class="mb-1">👋 Login student</h2>
        <p class="text-muted">Email: <strong>{{ session('email') }}</strong> | Role: <strong>{{ session('role') }}</strong></p>

        <hr class="my-4">

        <h4 class="mb-3">Lengkapi Data Mahasiswa</h4>
        <form method="POST" action="/dashboard/student" class="text-start">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
            </div>
            <div class="mb-4">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Lanjut ke Menu Mahasiswa</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
