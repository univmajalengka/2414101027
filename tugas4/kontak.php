<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Wisata Keliling Dunia Majalengka</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- BAR LOGIN -->
<div class="login-info">
    <p>Hubungi Wisata Keliling Dunia Majalengka</p>

    <?php if (!isset($_SESSION['login'])): ?>
        <a href="login.php"><button>Login Admin</button></a>
    <?php else: ?>
        <a href="admin/dashboard.php"><button>Dashboard</button></a>
    <?php endif; ?>
</div>

<!-- HEADER -->
<header>
    Kontak Kami
</header>

<!-- NAVBAR -->
<nav>
    <ul>
        <li><a href="index.php" style="color:white;">Beranda</a></li>
        <li><a href="about.php" style="color:white;">Tentang</a></li>
        <li><a href="spot.php" style="color:white;">Spot Dunia</a></li>
        <li><a href="tiket.php" style="color:white;">Tiket Masuk</a></li>
        <li><a href="paket.php" style="color:white;">Paket Wisata</a></li>
        <li style="text-decoration:underline;">Kontak</li>
    </ul>
</nav>

<!-- KONTEN -->
<div class="content">

    <h2 style="color:#1c8b4e;">Hubungi Kami</h2>

    <p>
        Jika kamu memiliki pertanyaan, permintaan khusus, kerja sama, atau ingin
        memastikan informasi wisata, silakan hubungi kami melalui kontak berikut.
    </p>

    <br>

    <!-- INFORMASI KONTAK -->
    <h3 style="color:#2da45f;">📞 Nomor Telepon / WhatsApp</h3>
    <p>
        <a href="https://wa.me/6281234567890" target="_blank" style="color:#1c8b4e; font-weight:bold;">
            0812-3456-7890 – Klik untuk WhatsApp
        </a>
    </p>

    <h3 style="color:#2da45f;">📧 Email</h3>
    <p>wisatakd.majalengka@gmail.com</p>

    <h3 style="color:#2da45f;">📍 Alamat</h3>
    <p>Majalengka, Jawa Barat, Indonesia</p>

    <br>

    <!-- FORMULA PESAN -->
    <h3 style="color:#1c8b4e;">Kirim Pesan Cepat</h3>

    <form action="#" method="post">
        <label>Nama Lengkap</label>
        <input type="text" placeholder="Masukkan nama kamu" required>

        <label>Email</label>
        <input type="email" placeholder="Masukkan email" required>

        <label>Pesan</label>
        <textarea placeholder="Tulis pesan kamu..." required></textarea>

        <br><br>
        <button>Kirim Pesan</button>
    </form>

    <br><br>

    <!-- MAP OPSIONAL -->
    <h3 style="color:#2da45f;">🗺️ Lokasi Peta</h3>

    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.9794582165136!2d108.22798107475344!3d-6.880998569341616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f27c3e105aa6d%3A0x87c557c3b31e8c7c!2sMajalengka!5e0!3m2!1sen!2sid!4v1707890000000"
        width="100%" height="300" style="border:0; border-radius:12px;" allowfullscreen="" loading="lazy">
    </iframe>

    <br><br>

    <a href="index.php">
        <button style="width:200px;">← Kembali ke Beranda</button>
    </a>

</div>

<!-- FOOTER -->
<footer>
    <p>© 2025 Wisata Keliling Dunia Majalengka</p>
</footer>

</body>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Wisata Keliling Dunia Majalengka</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- BAR LOGIN -->
<div class="login-info">
    <p>Hubungi Wisata Keliling Dunia Majalengka</p>

    <?php if (!isset($_SESSION['login'])): ?>
        <a href="login.php"><button>Login Admin</button></a>
    <?php else: ?>
        <a href="admin/dashboard.php"><button>Dashboard</button></a>
    <?php endif; ?>
</div>

<!-- HEADER -->
<header>
    Kontak Kami
</header>

<!-- NAVBAR -->
<nav>
    <ul>
        <li><a href="index.php" style="color:white;">Beranda</a></li>
        <li><a href="about.php" style="color:white;">Tentang</a></li>
        <li><a href="spot.php" style="color:white;">Spot Dunia</a></li>
        <li><a href="tiket.php" style="color:white;">Tiket Masuk</a></li>
        <li><a href="paket.php" style="color:white;">Paket Wisata</a></li>
        <li style="text-decoration:underline;">Kontak</li>
    </ul>
</nav>

<!-- KONTEN -->
<div class="content">

    <h2 style="color:#1c8b4e;">Hubungi Kami</h2>

    <p>
        Jika kamu memiliki pertanyaan, permintaan khusus, kerja sama, atau ingin
        memastikan informasi wisata, silakan hubungi kami melalui kontak berikut.
    </p>

    <br>

    <!-- INFORMASI KONTAK -->
    <h3 style="color:#2da45f;">📞 Nomor Telepon / WhatsApp</h3>
    <p>
        <a href="https://wa.me/6281234567890" target="_blank" style="color:#1c8b4e; font-weight:bold;">
            0812-3456-7890 – Klik untuk WhatsApp
        </a>
    </p>

    <h3 style="color:#2da45f;">📧 Email</h3>
    <p>wisatakd.majalengka@gmail.com</p>

    <h3 style="color:#2da45f;">📍 Alamat</h3>
    <p>Majalengka, Jawa Barat, Indonesia</p>

    <br>

    <!-- FORMULA PESAN -->
    <h3 style="color:#1c8b4e;">Kirim Pesan Cepat</h3>

    <form action="#" method="post">
        <label>Nama Lengkap</label>
        <input type="text" placeholder="Masukkan nama kamu" required>

        <label>Email</label>
        <input type="email" placeholder="Masukkan email" required>

        <label>Pesan</label>
        <textarea placeholder="Tulis pesan kamu..." required></textarea>

        <br><br>
        <button>Kirim Pesan</button>
    </form>

    <br><br>

    <!-- MAP OPSIONAL -->
    <h3 style="color:#2da45f;">🗺️ Lokasi Peta</h3>

    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.9794582165136!2d108.22798107475344!3d-6.880998569341616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f27c3e105aa6d%3A0x87c557c3b31e8c7c!2sMajalengka!5e0!3m2!1sen!2sid!4v1707890000000"
        width="100%" height="300" style="border:0; border-radius:12px;" allowfullscreen="" loading="lazy">
    </iframe>

    <br><br>

    <a href="index.php">
        <button style="width:200px;">← Kembali ke Beranda</button>
    </a>

</div>

<!-- FOOTER -->
<footer>
    <p>© 2025 Wisata Keliling Dunia Majalengka</p>
</footer>

</body>
</html>
