<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyKRS - Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #eef2f7, #dbeafe);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background-color: #1d4ed8;
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
        }

        .menu-card {
            border: none;
            border-radius: 15px;
            background: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
        }

        .icon {
            font-size: 2.5rem;
            color: #1d4ed8;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .header-title {
            font-size: 2rem;
            font-weight: bold;
            color: #1d4ed8;
        }

        .container {
            padding-bottom: 50px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg shadow">
    <div class="container">
        <a class="navbar-brand" href="#">MyKRS Admin</a>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="text-center mb-5 header-title">🛠️ Dashboard Admin</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">

        <!-- Manajemen Mahasiswa -->
        <div class="col">
            <a href="/admin/mahasiswa" class="text-decoration-none text-dark">
                <div class="card menu-card h-100">
                    <div class="card-body text-center">
                        <div class="icon mb-3">👨‍🎓</div>
                        <h5 class="card-title">Manajemen Mahasiswa</h5>
                        <p class="card-text">Tambah, ubah, dan hapus data mahasiswa.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Manajemen Dosen -->
        <div class="col">
            <a href="/admin/dosen" class="text-decoration-none text-dark">
                <div class="card menu-card h-100">
                    <div class="card-body text-center">
                        <div class="icon mb-3">👨‍🏫</div>
                        <h5 class="card-title">Manajemen Dosen</h5>
                        <p class="card-text">Kelola data dosen pembimbing dan pengajar.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Manajemen Mata Kuliah -->
        <div class="col">
            <a href="/admin/matkul" class="text-decoration-none text-dark">
                <div class="card menu-card h-100">
                    <div class="card-body text-center">
                        <div class="icon mb-3">📘</div>
                        <h5 class="card-title">Manajemen Mata Kuliah</h5>
                        <p class="card-text">Tambah atau ubah data mata kuliah.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pengelolaan KRS Mahasiswa -->
        <div class="col">
            <a href="/admin/krs" class="text-decoration-none text-dark">
                <div class="card menu-card h-100">
                    <div class="card-body text-center">
                        <div class="icon mb-3">🗂️</div>
                        <h5 class="card-title">Pengelolaan KRS</h5>
                        <p class="card-text">Lihat dan kelola pengajuan KRS mahasiswa.</p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
