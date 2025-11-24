<?php
session_start();
include "config/koneksi.php";

if (!isset($_GET['id'])) {
    header("Location: paket.php");
    exit;
}

$id = $_GET['id'];
$paket = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM paket_wisata WHERE id=$id"));

if (!$paket) {
    die("Paket tidak ditemukan!");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Paket - <?= $paket['nama'] ?></title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- LOGIN BAR -->
<div class="login-info">
    <p>Detail Paket Wisata</p>

    <?php if (!isset($_SESSION['login'])): ?>
        <a href="login.php"><button>Login Admin</button></a>
    <?php else: ?>
        <a href="admin/dashboard.php"><button>Dashboard</button></a>
    <?php endif; ?>
</div>

<!-- HEADER -->
<header>
    Detail Paket Wisata
</header>

<!-- NAVBAR -->
<nav>
    <ul>
        <li><a href="index.php" style="color:white;">Beranda</a></li>
        <li><a href="about.php" style="color:white;">Tentang</a></li>
        <li><a href="spot.php" style="color:white;">Spot Dunia</a></li>
        <li><a href="tiket.php" style="color:white;">Tiket Masuk</a></li>
        <li><a href="paket.php" style="color:white;">Paket Wisata</a></li>
        <li><a href="kontak.php" style="color:white;">Kontak</a></li>
    </ul>
</nav>

<!-- KONTEN DETAIL -->
<div class="content">

    <h2 style="color:#1c8b4e;"><?= $paket['nama'] ?></h2>

    <img src="images/<?= $paket['gambar'] ?>" 
         style="width:100%; max-width:700px; border-radius:12px; display:block; margin:auto;">

    <br>

    <h3 style="color:#2da45f;">Deskripsi Paket</h3>
    <p><?= nl2br($paket['deskripsi']) ?></p>

    <h3 style="color:#2da45f;">Harga Paket</h3>
    <p style="font-size:20px; font-weight:bold; color:#1c8b4e;">
        Rp <?= number_format($paket['harga'], 0, ',', '.') ?>
    </p>

    <br>

    <a href="pemesanan.php?paket_id=<?= $paket['id'] ?>">
        <button style="width:200px;">Pesan Sekarang</button>
    </a>

    <br><br>

    <a href="paket.php">
        <button
