<?php
if (isset($_POST['create'])) {
  include 'db.php';

  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $hargaInput = $_POST['harga'] ?? '0';
  $hargaNormalized = str_replace('.', '', $hargaInput);
  $hargaNormalized = str_replace(',', '.', $hargaNormalized);
  $harga = floatval($hargaNormalized);
  $gambar = $_FILES['gambar']['name'] ?? '';
  $tempGambar = $_FILES['gambar']['tmp_name'] ?? '';
  $errorUpload = $_FILES['gambar']['error'] ?? UPLOAD_ERR_NO_FILE;

  $target_dir = realpath(__DIR__ . '/gambar');
  if ($target_dir === false) {
    $target_dir = __DIR__ . '/gambar';
    if (!is_dir($target_dir)) {
      mkdir($target_dir, 0775, true);
    }
  }

  $target_file = rtrim($target_dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . basename($gambar);
  if (!is_writable($target_dir)) {
    echo "Folder tidak upload tidak diizinkan: $target_dir";
    exit;
  }

  if ($errorUpload === UPLOAD_ERR_OK && move_uploaded_file($tempGambar, $target_file)) {
    $sql = "INSERT INTO produk (nama, deskripsi, harga, gambar) VALUES ('$nama', '$deskripsi', '$harga', '$gambar')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('Data berhasil disimpan.'); window.location.href='dashboard.php';</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } else {
    echo "Error uploading file: " . $errorUpload;
  }

  $conn->close();
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZaOptik | Tambah Produk</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
    body {
      font-family: 'Poppins', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }
  </style>
</head>

<body class="min-h-screen bg-[#FCFAF5] text-[#101828] antialiased">
  <header class="border-b border-black/5 bg-white/80 backdrop-blur">
    <div class="mx-auto flex max-w-3xl items-center justify-between px-6 py-6">
      <div>
        <p class="text-xs font-semibold uppercase tracking-wide text-[#101828]/60">Manajemen Produk</p>
        <h1 class="text-2xl font-semibold text-[#101828]">Tambah Koleksi Kacamata</h1>
      </div>
      <a
        href="dashboard.php"
        class="inline-flex items-center justify-center rounded-full border border-[#101828]/20 px-5 py-2 text-sm font-medium text-[#101828] transition hover:border-[#0EA5E9] hover:text-[#0EA5E9]">
        Kembali ke Dashboard
      </a>
    </div>
  </header>

  <main class="mx-auto max-w-3xl px-6 py-12">
    <div class="rounded-3xl border border-black/5 bg-white/80 p-8 shadow-xl shadow-[#101828]/10">
      <div class="mb-8">
        <h2 class="text-xl font-semibold text-[#101828]">Detail Produk Baru</h2>
        <p class="mt-2 text-sm text-[#101828]/70">Lengkapi informasi berikut untuk menampilkan produk Anda di zaoptik.</p>
      </div>
      <form action="" method="post" enctype="multipart/form-data" class="space-y-6">
        <div>
          <label for="harga" class="block text-sm font-semibold text-[#101828]">Harga Produk (Rp)</label>
          <div class="mt-2 flex items-center gap-2 rounded-xl border border-[#101828]/10 bg-white px-4 py-3 text-sm text-[#101828] shadow-sm focus-within:border-[#0EA5E9] focus-within:outline-none focus-within:ring-2 focus-within:ring-[#0EA5E9]/30">
            <span class="text-[#101828]/60">Rp</span>
            <input
              type="number"
              min="0"
              step="1000"
              id="harga"
              name="harga"
              class="w-full border-none bg-transparent text-sm text-[#101828] outline-none focus:ring-0"
              placeholder="Masukkan harga (contoh: 750000)"
              required />
          </div>
        </div>
        <div>
          <label for="nama" class="block text-sm font-semibold text-[#101828]">Nama Produk</label>
          <input
            type="text"
            id="nama"
            name="nama"
            class="mt-2 w-full rounded-xl border border-[#101828]/10 bg-white px-4 py-3 text-sm text-[#101828] shadow-sm focus:border-[#0EA5E9] focus:outline-none focus:ring-2 focus:ring-[#0EA5E9]/30"
            placeholder="Contoh: Frame Titanium Seri Aurora"
            required />
        </div>
        <div>
          <label for="deskripsi" class="block text-sm font-semibold text-[#101828]">Deskripsi Produk</label>
          <textarea
            id="deskripsi"
            name="deskripsi"
            class="mt-2 w-full rounded-xl border border-[#101828]/10 bg-white px-4 py-3 text-sm text-[#101828] shadow-sm focus:border-[#0EA5E9] focus:outline-none focus:ring-2 focus:ring-[#0EA5E9]/30"
            rows="4"
            placeholder="Tuliskan highlight produk, bahan, dan lensa yang direkomendasikan."
            required></textarea>
        </div>
        <div>
          <label for="gambar" class="block text-sm font-semibold text-[#101828]">Foto Produk</label>
          <div class="mt-2 flex flex-col gap-3 rounded-xl border border-dashed border-[#101828]/20 bg-[#FCFAF5] p-6 text-sm text-[#101828]/70">
            <input
              type="file"
              id="gambar"
              name="gambar"
              accept="image/*"
              class="text-sm text-[#101828]"
              required />
            <p class="text-xs text-[#101828]/60">Format gambar .jpg, .png, .webp maksimal 3MB.</p>
          </div>
        </div>
        <div class="flex flex-col gap-3 sm:flex-row sm:justify-end">
          <a
            href="dashboard.php"
            class="inline-flex items-center justify-center rounded-full border border-[#101828]/20 px-5 py-3 text-sm font-semibold text-[#101828] transition hover:border-[#0EA5E9] hover:text-[#0EA5E9]">
            Batal
          </a>
          <button
            type="submit"
            name="create"
            class="inline-flex items-center justify-center rounded-full bg-[#101828] px-6 py-3 text-sm font-semibold text-[#FCFAF5] shadow-lg shadow-[#101828]/20 transition hover:bg-[#0EA5E9]">
            Simpan Produk
          </button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
