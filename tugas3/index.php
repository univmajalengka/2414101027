<?php
if(isset($_GET['status'])){
    if($_GET['status'] == 'sukses'){
        echo "<h2>Pendaftaran berhasil!</h2>";
    } else {
        echo "<h2>Pendaftaran gagal!</h2>";
    }
} else {
    echo "<h2>Selamat datang di halaman utama</h2>";
}
?>
<br>
<a href="form-daftar.php">Kembali ke Form</a>
