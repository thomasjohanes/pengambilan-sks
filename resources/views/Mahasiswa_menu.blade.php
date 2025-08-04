<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyKRS - Menu Mahasiswa</title>
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
        <a class="navbar-brand" href="#">MyKRS</a>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="text-center mb-5 header-title">📚 Menu Mahasiswa</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">

        <!-- Isi KRS -->
        <div class="col">
            <div class="card menu-card h-100">
                <div class="card-body text-center">
                    <div class="icon mb-3">📄</div>
                    <h5 class="card-title">Isi KRS</h5>
                    <p class="card-text">Pilih mata kuliah yang ingin diambil semester ini.</p>
                </div>
            </div>
        </div>

        <!-- Jadwal Kuliah -->
        <div class="col">
            <div class="card menu-card h-100">
                <div class="card-body text-center">
                    <div class="icon mb-3">📅</div>
                    <h5 class="card-title">Lihat Jadwal</h5>
                    <p class="card-text">Lihat jadwal kuliah dari KRS aktif.</p>
                </div>
            </div>
        </div>

        <!-- Cetak KRS -->
        <div class="col">
            <div class="card menu-card h-100">
                <div class="card-body text-center">
                    <div class="icon mb-3">📝</div>
                    <h5 class="card-title">Cetak KRS</h5>
                    <p class="card-text">Cetak KRS yang sudah disetujui oleh dosen pembimbing.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
