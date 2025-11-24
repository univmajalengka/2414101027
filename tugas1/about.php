<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - Wisata Keliling Dunia Majalengka</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- BAR LOGIN -->
<div class="login-info">
    <p>Informasi Website Wisata Keliling Dunia Majalengka</p>

    <?php if (!isset($_SESSION['login'])): ?>
        <a href="login.php"><button>Login Admin</button></a>
    <?php else: ?>
        <a href="admin/dashboard.php"><button>Dashboard</button></a>
    <?php endif; ?>
</div>

<!-- HEADER -->
<header>
    Tentang Wisata Keliling Dunia Majalengka
</header>

<!-- NAVBAR -->
<nav>
    <ul>
        <li><a href="index.php" style="color:white;">Beranda</a></li>
        <li style="text-decoration:underline;">Tentang</li>
        <li><a href="spot.php" style="color:white;">Spot Dunia</a></li>
        <li><a href="tiket.php" style="color:white;">Tiket Masuk</a></li>
        <li><a href="paket.php" style="color:white;">Paket Wisata</a></li>
        <li><a href="kontak.php" style="color:white;">Kontak</a></li>
    </ul>
</nav>

<!-- ISI HALAMAN -->
<div class="content">

    <h2 style="color:#1c8b4e;">Tentang Wisata</h2>

    <p>
        <strong>Wisata Keliling Dunia Majalengka</strong> adalah destinasi wisata unik
        yang menghadirkan miniatur ikon-ikon terkenal dari seluruh dunia.
        Pengunjung dapat merasakan pengalaman seakan berkeliling dunia
        dalam satu tempat, dengan suasana alam Majalengka yang asri.
    </p>

    <br>

    <h3 style="color:#2da45f;">Visi</h3>
    <p>
        Menjadi tempat wisata edukatif dan rekreasi keluarga terbaik
        yang menghadirkan pengalaman keliling dunia dengan cara menyenangkan.
    </p>

    <h3 style="color:#2da45f;">Misi</h3>
    <ul>
        <li>Menyediakan miniatur bangunan ikonik dunia yang berkualitas.</li>
        <li>Memberikan edukasi budaya internasional kepada pengunjung.</li>
        <li>Menciptakan suasana wisata yang aman, nyaman, dan menyenangkan.</li>
        <li>Mendorong peningkatan pariwisata Majalengka.</li>
    </ul>

    <br>

    <!-- FOTO TAMBAHAN (Opsional) -->
    <img src="images/about.jpg" 
         alt="Foto Wisata"
         style="width:100%; max-width:600px; border-radius:12px; display:block; margin:auto;">

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
