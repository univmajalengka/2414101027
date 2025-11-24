<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

include "../config/koneksi.php";

// Ambil data paket
$query = mysqli_query($koneksi, "SELECT * FROM paket_wisata ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Paket Wisata</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>Data Paket Wisata</header>

<nav>
    <ul>
        <li><a href="dashboard.php" style="color:white;">Dashboard</a></li>
        <li><a href="data-paket.php" style="color:white; text-decoration:underline;">Data Paket Wisata</a></li>
        <li><a href="tambah-paket.php" style="color:white;">Tambah Paket</a></li>
        <li><a href="logout.php" style="color:white;">Logout</a></li>
    </ul>
</nav>

<div class="content">
    <h2>Daftar Paket Wisata</h2>

    <table border="1" width="100%" cellpadding="10" cellspacing="0">
        <tr style="background:#2fa36b; color:white;">
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Paket</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>

            <td>
                <img src="../images/<?= $row['gambar']; ?>" width="120">
            </td>

            <td><?= $row['nama']; ?></td>
            <td><?= $row['deskripsi']; ?></td>
            <td>Rp <?= number_format($row['harga'],0,",","."); ?></td>

            <td>
                <a href="edit-paket.php?id=<?= $row['id']; ?>">
                    <button>Edit</button>
                </a>

                <a href="hapus-paket.php?id=<?= $row['id']; ?>" 
                   onclick="return confirm('Yakin mau hapus paket ini?');">
                    <button style="background:red;">Hapus</button>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br>

    <a href="tambah-paket.php">
        <button>+ Tambah Paket Baru</button>
    </a>

</div>

</body>
</html>
