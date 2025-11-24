<?php
include "config/koneksi.php";

if (isset($_POST['pesan'])) {

    $nama   = $_POST['nama'];
    $wa     = $_POST['wa'];
    $jumlah = $_POST['jumlah'];
    $paket_id = $_POST['paket_id'];

    // Ambil data paket
    $paket = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM paket_wisata WHERE id='$paket_id'"));

    $nama_paket = $paket['nama'];
    $harga = $paket['harga'];
    $total = $harga * $jumlah;

    // Kode booking
    $kode = "WKDM-" . date("Y") . "-" . rand(1000,9999);

    // Simpan ke database (SESUAI KOLOM)
    mysqli_query($koneksi, "INSERT INTO pemesanan 
    (kode_booking, nama_pemesan, whatsapp, jumlah, total, nama_paket, tanggal) 
    VALUES 
    ('$kode', '$nama', '$wa', '$jumlah', '$total', '$nama_paket', NOW())");

    // Redirect ke halaman sukses (BUKAN alert)
    header("Location: sukses.php?kode=$kode");
}
?>
