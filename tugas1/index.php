<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Keliling Dunia Majalengka</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<!-- ===================== -->
<!-- BAR LOGIN -->
<!-- ===================== -->
<div class="login-info">
    <p>Selamat Datang di Wisata Keliling Dunia Majalengka</p>

    <?php if (!isset($_SESSION['login'])): ?>
        <a href="login.php"><button>Login Admin</button></a>
    <?php else: ?>
        <a href="admin/dashboard.php"><button>Dashboard</button></a>
    <?php endif; ?>
</div>

<!-- ===================== -->
<!-- HEADER -->
<!-- ===================== -->
<header>
    Wisata Keliling Dunia Majalengka
</header>

<!-- ===================== -->
<!-- NAVBAR -->
<!-- ===================== -->
<nav>
    <ul>
        <li>Beranda</li>
        <li>Tentang</li>
        <li>Spot Dunia</li>
        <li>Tiket Masuk</li>
        <li>Paket Wisata</li>
        <li>Kontak</li>
    </ul>
</nav>

<!-- BANNER -->
<section class="main-banner">
    <img src="images/banner2.jpeg" alt="Banner Utama">
    <div class="banner-text">
        <h1>Selamat Datang di Wisata Keliling Dunia Majalengka</h1>
        <p>Pesan paket wisata favoritmu dengan mudah dan cepat</p>

        <a href="#paket">
            <button>Booking Sekarang</button>
        </a>
    </div>
</section>

<section class="spot-dunia">
    <h2>🌍 Spot Dunia Populer</h2>

    <div class="spot-container">
        <div class="spot-card">
            <img src="images/tembokbesarcina.png">
            <h3>Cina</h3>
            <p>Ikon terkenal dunia yang berada di Cina.</p>
        </div>

        <div class="spot-card">
            <img src="images/jepang.png">
            <h3>Jepang</h3>
            <p>Simbol budaya Jepang yang khas.</p>
        </div>

        <div class="spot-card">
            <img src="images/belanda.png">
            <h3>Belanda</h3>
            <p>Terkenal dengan kincir angin.</p>
        </div>
    </div>
</section>

<section class="tentang" style=">
    background: red;
    color: white;
    padding: 80px;
    font-size: 25px;
    border-radius: 20px;
    margin: 50px;
    border: 5px solid yellow;
    text-align: center;
    ">
    <h2>🏞 Tentang Wisata Kelil
    <p>
        Wisata Keliling Dunia Majalengka adalah tempat wisata unik yang menghadirkan 
        miniatur berbagai ikon dunia di satu lokasi. Pengunjung bisa berfoto dengan 
        berbagai tema negara seperti Jepang, Cina, Belanda, dan lainnya.
        Cocok untuk keluarga, pelajar, dan wisata edukasi.
    </p>
</section>

<section class="tiket">
    <h2>🎟 Tiket Masuk</h2>

    <div class="tiket-box">
        <p>Anak-anak : <b>Rp 100.000</b></p>
        <p>Dewasa : <b>Rp 150.000</b></p>
        <p>Rombongan (min. 10 orang) : <b>Rp 20.000 / orang</b></p>
    </div>
</section>


<!-- ===================== -->
<!-- PAKET WISATA -->
<!-- ===================== -->
<section class="paket-container" id="paket">

<?php
include "config/koneksi.php";
$paket = mysqli_query($koneksi, "SELECT * FROM paket_wisata");

while($row = mysqli_fetch_assoc($paket)) {
?>
    <div class="paket-card">
        <img src="images/<?= $row['gambar']; ?>">
        <div class="info">
            <h3><?= $row['nama']; ?></h3>
            <p><?= $row['deskripsi']; ?></p>
            <p><strong>Rp <?= $row['harga']; ?></strong></p>

            <a href="pemesanan.php?paket_id=<?= $row['id']; ?>">
                <button>Pesan Sekarang</button>
            </a>
        </div>
    </div>
<?php } ?>

</section>


<!-- ===================== -->
<!-- VIDEO PROMOSI -->
<!-- ===================== -->
<div class="video">
    <h2>Video Promosi Wisata</h2>
    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ"
        title="YouTube video" allowfullscreen></iframe>
</div>

<section class="kontak">
    <h2>📞 Kontak Kami</h2>
    <p>📍 Alamat : Majalengka, Jawa Barat</p>
    <p>📱 WhatsApp : 0812-xxxx-xxxx</p>
    <p>📧 Email : wisatakelilingdunia@gmail.com</p>
</section>

<!-- ===================== -->
<!-- FOOTER -->
<!-- ===================== -->
<footer>
    <p>© 2025 Wisata Keliling Dunia Majalengka</p>
</footer>

<script>
const tentang = document.querySelector('.tentang');

window.addEventListener('scroll', function() {
    const posisi = tentang.getBoundingClientRect().top;
    const tinggiLayar = window.innerHeight;

    if (posisi < tinggiLayar - 100) {
        tentang.classList.add('muncul');
    }
});
</script>

</body>
</html>
