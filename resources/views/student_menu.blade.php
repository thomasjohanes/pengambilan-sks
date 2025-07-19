<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu Mahasiswa - MyKRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .menu-card {
            transition: transform 0.2s ease;
        }
        .menu-card:hover {
            transform: scale(1.02);
        }
        .icon {
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">📚 Menu Mahasiswa</h2>

        <div class="row row-cols-1 row-cols-md-2 g-4">

            <!-- Isi KRS -->
            <div class="col">
                <div class="card menu-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><span class="icon">📄</span> Isi KRS</h5>
                        <p class="card-text">Memilih mata kuliah yang akan diambil pada semester berjalan.</p>
                    </div>
                </div>
            </div>

            <!-- Lihat KRS Lama -->
            <div class="col">
                <div class="card menu-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><span class="icon">🔍</span> Lihat KRS Lama</h5>
                        <p class="card-text">Melihat KRS semester-semester sebelumnya.</p>
                    </div>
                </div>
            </div>

            <!-- Status KRS -->
            <div class="col">
                <div class="card menu-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><span class="icon">📋</span> Status KRS</h5>
                        <p class="card-text">Melihat apakah KRS sudah disetujui dosen atau belum.</p>
                    </div>
                </div>
            </div>

            <!-- Cetak KRS -->
            <div class="col">
                <div class="card menu-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><span class="icon">📝</span> Cetak KRS</h5>
                        <p class="card-text">Mencetak KRS yang sudah disetujui.</p>
                    </div>
                </div>
            </div>

            <!-- Profil Mahasiswa -->
            <div class="col">
                <div class="card menu-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><span class="icon">👤</span> Profil Mahasiswa</h5>
                        <p class="card-text">Melihat data pribadi, NIM, jurusan, dll.</p>
                    </div>
                </div>
            </div>

            <!-- Jadwal Kuliah -->
            <div class="col">
                <div class="card menu-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><span class="icon">📅</span> Jadwal Kuliah</h5>
                        <p class="card-text">Melihat jadwal kuliah berdasarkan KRS yang diambil.</p>
                    </div>
                </div>
            </div>

            <!-- Revisi KRS -->
            <div class="col">
                <div class="card menu-card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><span class="icon">🔁</span> Revisi KRS</h5>
                        <p class="card-text">Mengubah KRS jika belum disetujui atau ditolak dosen.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
