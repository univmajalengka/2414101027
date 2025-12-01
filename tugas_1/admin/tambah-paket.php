<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

include "../config/koneksi.php";

if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    // upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, "../images/" . $gambar);

    mysqli_query($koneksi, "INSERT INTO paket_wisata VALUES('', '$nama', '$deskripsi', '$harga', '$gambar')");

    header("Location: data-paket.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket Wisata</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>Tambah Paket Wisata</header>

<nav>
    <ul>
        <li><a href="dashboard.php" style="color:white;">Dashboard</a></li>
        <li><a href="data-paket.php" style="color:white;">Data Paket</a></li>
        <li><a href="tambah-paket.php" style="color:white; text-decoration:underline;">Tambah Paket</a></li>
        <li><a href="logout.php" style="color:white;">Logout</a></li>
    </ul>
</nav>

<div class="content">
    <h2>Tambah Paket Baru</h2>

    <form action="tambah-paket.php" method="post" enctype="multipart/form-data">
        <label>Nama Paket:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi" required></textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" required><br><br>

        <br><br>
<label>Upload Gambar:</label>
<input type="file" name="gambar" required>

<br><br>
<button type="submit" name="save">Simpan Paket</button>
