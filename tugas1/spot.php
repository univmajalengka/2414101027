<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spot Dunia - Wisata Keliling Dunia Majalengka</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- BAR LOGIN -->
<div class="login-info">
    <p>Spot Dunia • Wisata Keliling Dunia Majalengka</p>

    <?php if (!isset($_SESSION['login'])): ?>
        <a href="login.php"><button>Login Admin</button></a>
    <?php else: ?>
        <a href="admin/dashboard.php"><button>Dashboard</button></a>
    <?php endif; ?>
</div>

<!-- HEADER -->
<header>
    Spot Dunia
</header>

<!-- NAVBAR -->
<nav>
    <ul>
        <li><a href="index.php" style="color:white;">Beranda</a></li>
        <li><a href="about.php" style="color:white;">Tentang</a></li>
        <li style="text-decoration:underline;">Spot Dunia</li>
        <li><a href="tiket.php" style="color:white;">Tiket Masuk</a></li>
        <li><a href="paket.php" style="color:wh
