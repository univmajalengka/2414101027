<?php
include "config/koneksi.php";
$kode = $_GET['kode'];

$q = mysqli_query($koneksi, "
    SELECT p.*, pk.nama AS paket_nama, pk.harga 
    FROM pesanan p 
    JOIN paket_wisata pk ON p.paket_id = pk.id
    WHERE kode_booking='$kode'
");
$data = mysqli_fetch_assoc($q);
?>
<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Checkout Berhasil!</h2>

<p>Kode Booking: <b><?= $data['kode_booking'] ?></b></p>
<p>Nama Pemesan: <?= $data['nama_pemesan'] ?></p>
<p>Paket: <?= $data['paket_nama'] ?></p>
<p>Tanggal: <?= $data['tanggal_kunjungan'] ?></p>
<p>Jumlah Orang: <?= $data['jumlah'] ?></p>
<p>Total Bayar: Rp <?= number_format($data['total'],0,',','.') ?></p>

<p>Silakan tunjukkan kode booking saat datang.</p>

</body>
</html>
