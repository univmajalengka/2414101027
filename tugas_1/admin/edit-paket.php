<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

include "../config/koneksi.php";

// Ambil ID dari URL
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM paket_wisata WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    if ($_FILES['gambar']['name'] != "") {
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmp, "../images/" . $gambar);

        mysqli_query($koneksi, "UPDATE paket_wisata SET 
            nama='$nama',
            deskripsi='$deskripsi',
            harga='$harga',
            gambar='$gambar'
            WHERE id='$id'");
    } else {
        mysqli_query($koneksi, "UPDATE paket_wisata SET 
            nama='$nama',
            deskripsi='$deskripsi',
            harga='$harga'
            WHERE id='$id'");
    }

    header("Location: data-paket.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Paket</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>Edit Paket Wisata</h2>

<form method="post" enctype="multipart/form-data">

    <label>Nama Paket</label>
    <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

    <label>Deskripsi</label>
    <textarea name="deskripsi" required><?= $data['deskripsi'] ?></textarea>

    <label>Harga</label>
    <input type="number" name="harga" value="<?= $data['harga'] ?>" required>

    <label>Gambar (boleh tidak diganti)</label>
    <input type="file" name="gambar">

    <br><br>
    <button type="submit" name="update">Update Paket</button>

</form>

</body>
</html>
