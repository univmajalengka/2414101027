<?php
session_start();
include "config/koneksi.php";

// Ambil data paket dari database
$paket = mysqli_query($koneksi, "SELECT * FROM paket_wisata ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata - Wisata Keliling Dunia Majalengka</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- BAR LOGIN -->
<div class="login-info">
    <p>Daftar Paket Wisata</p>

    <?php if (!isset($_SESSION['login'])): ?>
        <a href="login.php"><button>Login Admin</button></a>
    <?php else: ?>
        <a href="admin/dashboard.php"><button>Dashboard</button></a>
    <?php endif; ?>
</div>

<!-- HEADER -->
<header>
    Paket Wisata
</header>

<!-- NAVBAR -->
<nav>
    <ul>
        <li><a href="index.php" style="color:white;">Beranda</a></li>
        <li><a href="about.php" style="color:white;">Tentang</a></li>
        <li><a href="spot.php" style="color:white;">Spot Dunia</a></li>
        <li><a href="tiket.php" style="color:white;">Tiket Masuk</a></li>
        <li style="text-decoration:underline;">Paket Wisata</li>
        <li><a href="kontak.php" style="color:white;">Kontak</a></li>
    </ul>
</nav>

<!-- KONTEN -->
<div class="content">

    <h2 style="color:#1c8b4e;">Pilih Paket Wisata Anda</h2>

    <p>
        Berikut daftar paket wisata yang tersedia. Pilih paket yang paling sesuai
        untuk perjalanan Anda di Wisata Keliling Dunia Majalengka!
    </p>

</div>

<!-- CARD PAKET WISATA -->
<section class="paket-container">

<?php while ($row = mysqli_fetch_assoc($paket)): ?>

    <div class="paket-card">
        <img src="images/<?= $row['gambar'] ?>" alt="<?= $row['nama'] ?>">
        <div class="info">
            <h3><?= $row['nama'] ?></h3>
            <p><?= $row['deskripsi'] ?></p>
            <p><strong>Harga: Rp <?= number_format($row['harga'], 0, ',', '.') ?></strong></p>

            <a href="detail-paket.php?id=<?= $row['id'] ?>">

                <button>Pesan Sekarang</button>
            </a>
        </div>
    </div>

<?php endwhile; ?>

</section>

<!-- FOOTER -->
<footer>
    <p>© 2025 Wisata Keliling Dunia Majalengka</p>
</footer>

</body>
</html>
