<!DOCTYPE html>
<html>
<head>
    <title>Berhasil</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>Pemesanan Berhasil</header>

<div class="content" style="text-align:center; padding:60px;">
    <h2>Terima kasih telah memesan!</h2>
    <p>Kode Booking kamu:</p>
    <h1 style="color:#2da45f;">
        <?= $_GET['kode']; ?>
    </h1>

    <br>
    <a href="index.php">
        <button>Kembali ke Beranda</button>
    </a>
</div>

</body>
</html>
