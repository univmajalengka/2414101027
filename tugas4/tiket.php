<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Masuk - Wisata Keliling Dunia Majalengka</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- BAR LOGIN -->
<div class="login-info">
    <p>Informasi Tiket Masuk Wisata</p>

    <?php if (!isset($_SESSION['login'])): ?>
        <a href="login.php"><button>Login Admin</button></a>
    <?php else: ?>
        <a href="admin/dashboard.php"><button>Dashboard</button></a>
    <?php endif; ?>
</div>

<!-- HEADER -->
<header>
    Tiket Masuk
</header>

<!-- NAVBAR -->
<nav>
    <ul>
        <li><a href="index.php" style="color:white;">Beranda</a></li>
        <li><a href="about.php" style="color:white;">Tentang</a></li>
        <li><a href="spot.php" style="color:white;">Spot Dunia</a></li>
        <li style="text-decoration:underline;">Tiket Masuk</li>
        <li><a href="paket.php" style="color:white;">Paket Wisata</a></li>
        <li><a href="kontak.php" style="color:white;">Kontak</a></li>
    </ul>
</nav>

<!-- KONTEN -->
<div class="content">

    <h2 style="color:#1c8b4e;">Harga Tiket Masuk Wisata</h2>

    <p>
        Harga tiket masuk Wisata Keliling Dunia Majalengka berlaku untuk
        semua usia. Area wisata ini sudah termasuk akses ke beberapa spot
        foto utama dan fasilitas umum.
    </p>

    <br>

    <!-- TABEL HARGA -->
    <table border="1" cellpadding="8" style="max-width:600px; margin:auto;">
        <tr>
            <th>Jenis Tiket</th>
            <th>Harga</th>
        </tr>
        <tr>
            <td>Tiket Masuk Biasa</td>
            <td>Rp 20.000</td>
        </tr>
        <tr>
            <td>Tiket Weekend / Hari Libur</td>
            <td>Rp 25.000</td>
        </tr>
        <tr>
            <td>Tiket Anak (di bawah 5 tahun)</td>
            <td>Gratis</td>
        </tr>
    </table>

    <br>

    <h3 style="color:#2da45f;">Jam Operasional</h3>
    <ul>
        <li>Senin – Jumat : 08.00 - 17.00</li>
        <li>Sabtu – Minggu : 07.00 - 18.00</li>
        <li>Hari Libur Nasional : 07.00 - 18.00</li>
    </ul>

    <h3 style="color:#2da45f;">Fasilitas Tiket</h3>
    <ul>
        <li>Akses utama ke area miniatur dunia</li>
        <li>Area foto estetik</li>
        <li>Toilet umum</li>
        <li>Mushola</li>
        <li>Tempat duduk & gazebo</li>
        <li>Parkir kendaraan</li>
    </ul>

    <h3 style="color:#2da45f;">Ketentuan Pengunjung</h3>
    <ul>
        <li>Dilarang merusak miniatur atau properti wisata</li>
        <li>Sampah dibuang pada tempatnya</li>
        <li>Anak di bawah umur harus dalam pengawasan orang tua</li>
        <li>Tiket tidak dapat dikembalikan</li>
    </ul>

    <br><br>

    <a href="index.php">
        <button style="width:200px;">← Kembali ke Beranda</button>
    </a>

</div>

<!-- FOOTER -->
<footer>
    <p>© 2025 Wisata Keliling Dunia Majalengka</p>
</footer>

</body>
</html>
