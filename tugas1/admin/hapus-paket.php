<?php
include "../config/koneksi.php";

$id = $_GET['id'];

// Ambil nama gambar dulu
$ambil = mysqli_query($koneksi, "SELECT gambar FROM paket_wisata WHERE id='$id'");
$data = mysqli_fetch_assoc($ambil);

// Hapus gambar dari folder
if ($data['gambar'] != "") {
    unlink("../images/".$data['gambar']);
}

// Hapus data dari database
mysqli_query($koneksi, "DELETE FROM paket_wisata WHERE id='$id'");

header("Location: data-paket.php");
