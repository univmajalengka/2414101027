<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>
    Dashboard Admin - Wisata Keliling Dunia Majalengka
</header>

<nav>
    <ul>
        <li><a href="dashboard.php" style="color:white;">Dashboard</a></li>
        <li><a href="data-paket.php" style="color:white;">Data Paket Wisata</a></li>
        <li><a href="tambah-paket.php" style="color:white;">Tambah Paket</a></li>
        <li><a href="logout.php" style="color:white;">Logout</a></li>
    </ul>
</nav>

<!-- BANNER BESAR DI DASHBOARD -->
<div class="admin-banner">
    <img src="../images/banner2.jpeg" 
         alt="Banner Admin"
         style="width:100%; height:600px; object-fit:cover;">
</div>


<div class="content">
    <h2>Selamat Datang, Admin!</h2>


    