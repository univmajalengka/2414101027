<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
include "../config/koneksi.php";

$q = mysqli_query($koneksi, "
    SELECT p.*, pk.nama AS paket_nama 
    FROM pesanan p 
    JOIN paket_wisata pk ON p.paket_id = pk.id
    ORDER BY p.created_at DESC
");
?>
<!DOCTYPE html>
<html>
<head>
<title>Data Pesanan</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>Data Pesanan</header>

<nav>
  <ul>
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="data-paket.php">Data Paket</a></li>
    <li><a href="pesanan.php">Pesanan</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</nav>

<div class="content">
<h2>Daftar Pesanan</h2>

<table border="1" cellpadding="8">
<tr>
  <th>No</th>
  <th>Kode</th>
  <th>Nama</th>
  <th>Paket</th>
  <th>Tanggal</th>
  <th>Jumlah</th>
  <th>Total</th>
  <th>Status</th>
</tr>

<?php 
$no=1; 
while($row = mysqli_fetch_assoc($q)): 
?>
<tr>
  <td><?= $no++ ?></td>
  <td><?= $row['kode_booking'] ?></td>
  <td><?= $row['nama_pemesan'] ?></td>
  <td><?= $row['paket_nama'] ?></td>
  <td><?= $row['tanggal_kunjungan'] ?></td>
  <td><?= $row['jumlah'] ?></td>
  <td>Rp <?= number_format($row['total'],0,',','.') ?></td>
  <td><?= $row['status'] ?></td>
</tr>

<?php endwhile; ?>
</table>

</div>
</body>
</html>
