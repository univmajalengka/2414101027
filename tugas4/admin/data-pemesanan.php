<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

include "../config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Pemesanan</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>Data Pemesanan</header>

<nav>
    <ul>
        <li><a href="dashboard.php" style="color:white;">Dashboard</a></li>
        <li><a href="data-paket.php" style="color:white;">Data Paket</a></li>
        <li><a href="data-pemesanan.php" style="color:white; text-decoration:underline;">Data Pemesanan</a></li>
        <li><a href="logout.php" style="color:white;">Logout</a></li>
    </ul>
</nav>

<div class="content">
    <h2>Daftar Pemesanan Masuk</h2>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Whatsapp</th>
            <th>Paket</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Kode Booking</th>
            <th>Tanggal</th>
        </tr>

        <?php
        $no = 1;
        $q = mysqli_query($koneksi, "SELECT * FROM pemesanan ORDER BY id DESC");

        while ($row = mysqli_fetch_assoc($q)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($row['nama_pemesan']); ?></td>
            <td><?= htmlspecialchars($row['whatsapp']); ?></td>
            <td><?= htmlspecialchars($row['nama_paket']); ?></td>
            <td><?= $row['jumlah']; ?></td>
            <td>Rp <?= number_format($row['total'],0,',','.'); ?></td>
            <td><?= $row['kode_booking']; ?></td>
            <td><?= $row['tanggal']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
