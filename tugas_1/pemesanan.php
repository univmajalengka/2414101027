<?php
session_start();
include "config/koneksi.php";

// Ambil paket yang dipilih
if (!isset($_GET['paket_id'])) {
    header("Location: paket.php");
    exit;
}

$id = $_GET['paket_id'];
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
    <title>Pemesanan - <?= $paket['nama'] ?></title>

    <link rel="stylesheet" href="css/style.css">

    <script>
        function hitungTotal() {
            let harga = <?= $paket['harga'] ?>;
            let jumlah = document.getElementById("jumlah").value;

            if (jumlah < 1) jumlah = 1;

            let total = harga * jumlah;
            document.getElementById("total").value = "Rp " + total.toLocaleString('id-ID');
        }
    </script>
</head>
<body>

<header>
    Pemesanan Paket Wisata
</header>

<nav>
    <ul>
        <li><a href="index.php" style="color:white;">Beranda</a></li>
        <li><a href="paket.php" style="color:white;">Paket Wisata</a></li>
        <li><a href="kontak.php" style="color:white;">Kontak</a></li>
    </ul>
</nav>

<div class="content">
    <h2 style="color:#1c8b4e;">Form Pemesanan Paket</h2>

    <p>Anda sedang memesan paket: <b><?= $paket['nama'] ?></b></p>
    <p>Harga: <b>Rp <?= number_format($paket['harga'],0,',','.') ?></b></p>

    <form action="proses-pesan.php" method="post">

        <input type="hidden" name="paket_id" value="<?= $paket['id'] ?>">

        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>No WhatsApp:</label><br>
        <input type="text" name="wa" required><br><br>

        <label>Jumlah Orang:</label><br>
        <input type="number" id="jumlah" name="jumlah" value="1" min="1" oninput="hitungTotal()" required><br><br>

        <label>Total Harga:</label><br>
        <input type="text" id="total" value="Rp <?= number_format($paket['harga'],0,',','.') ?>" readonly><br><br>

        <button type="submit" name="pesan">Checkout</button>
    </form>

</div>

<footer>
    <p>© 2025 Wisata Keliling Dunia Majalengka</p>
</footer>

</body>
</html>
