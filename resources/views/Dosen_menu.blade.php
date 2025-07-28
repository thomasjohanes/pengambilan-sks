<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu Dosen - MyKRS</title>
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
        <h2 class="mb-4 text-center">🎓 Menu Dosen</h2>

        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">

            <!-- Lihat Daftar Mahasiswa yg Diampu -->
            <div class="col">
                <a href="/dosen/mahasiswa-diampu" class="text-decoration-none text-dark">
                    <div class="card menu-card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><span class="icon">👥</span> Lihat Daftar Mahasiswa yg Diampu</h5>
                            <p class="card-text">Melihat daftar mahasiswa yang mengambil mata kuliah Anda.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Setujui/Tolak KRS -->
            <div class="col">
                <a href="/dosen/krs-verifikasi" class="text-decoration-none text-dark">
                    <div class="card menu-card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><span class="icon">✅</span> Setujui/Tolak KRS Mahasiswa</h5>
                            <p class="card-text">Menyetujui atau menolak KRS yang diajukan oleh mahasiswa.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Lihat Mahasiswa yg Diampu -->
            <div class="col">
                <a href="/dosen/lihat-mahasiswa" class="text-decoration-none text-dark">
                    <div class="card menu-card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><span class="icon">📄</span> Lihat Mahasiswa yg Diampu</h5>
                            <p class="card-text">Menampilkan informasi detail mahasiswa yang berada dalam kelas Anda.</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
