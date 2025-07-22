<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Awal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Sistem Pengambilan SKS</h2>

    <div class="row text-center">
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Dosen</h5>
                    <p class="card-text fs-2">{{ $totalDosen }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Mahasiswa</h5>
                    <p class="card-text fs-2">{{ $totalMahasiswa }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Mata Kuliah</h5>
                    <p class="card-text fs-2">{{ $totalMatkul }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="/login" class="btn btn-primary">Login untuk Melanjutkan</a>
    </div>
</div>
</body>
</html>
