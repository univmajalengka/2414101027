<?php
include 'db.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
$row = null;

if ($id) {
  $sql = "SELECT * FROM produk WHERE id=$id";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
  } else {
    echo "Data tidak ditemukan!";
    exit();
  }
}

if (isset($_POST['update'])) {
  $id = (int) ($_POST['id'] ?? 0);
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $hargaInput = $_POST['harga'] ?? '0';
  $hargaNormalized = str_replace('.', '', $hargaInput);
  $hargaNormalized = str_replace(',', '.', $hargaNormalized);
  $harga = floatval($hargaNormalized);
  $gambar = $_FILES['gambar']['name'];
  $target_dir = "gambar/";
  $target_file = $target_dir . basename($gambar);

  if ($gambar) {
    // ambil gambar lama
    $sql = "SELECT gambar FROM produk WHERE id=$id";
    $result = $conn->query($sql);
    $old = $result->fetch_assoc();
    $old_image = $old['gambar'];

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
      $sql = "UPDATE produk 
                    SET nama='$nama', deskripsi='$deskripsi', harga='$harga', gambar='$gambar' 
                    WHERE id=$id";
      if ($conn->query($sql) === TRUE) {
        if ($old_image && file_exists($target_dir . $old_image)) {
          unlink($target_dir . $old_image);
        }
        echo "<script>alert(' berhasil diperbarui!');window.location.href='dashboard.php';</script>";
      } else {
        echo "Error: " . $conn->error;
      }
    } else {
      echo "Gagal upload gambar.";
    }
  } else {
    $sql = "UPDATE produk SET nama='$nama', deskripsi='$deskripsi', harga='$harga' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
      echo "<script>alert(' berhasil diperbarui!');window.location.href='dashboard.php';</script>";
    } else {
      echo "Error: " . $conn->error;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZaOptik | Edit Produk</title>
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
        <h1 class="text-2xl font-semibold text-[#101828]">Perbarui Data Produk</h1>
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
        <h2 class="text-xl font-semibold text-[#101828]">Detail Produk</h2>
        <p class="mt-2 text-sm text-[#101828]/70">Perbarui informasi di bawah ini untuk menjaga data produk tetap akurat.</p>
      </div>
      <form action="update.php?id=<?= $id ?>" method="post" enctype="multipart/form-data" class="space-y-6">
        <input type="hidden" id="id" name="id" value="<?= htmlspecialchars($row['id'] ?? '', ENT_QUOTES) ?>" />

        <div>
          <label for="nama" class="block text-sm font-semibold text-[#101828]">Nama Produk</label>
          <input
            type="text"
            id="nama"
            name="nama"
            value="<?= htmlspecialchars($row['nama'] ?? '', ENT_QUOTES) ?>"
            class="mt-2 w-full rounded-xl border border-[#101828]/10 bg-white px-4 py-3 text-sm text-[#101828] shadow-sm focus:border-[#0EA5E9] focus:outline-none focus:ring-2 focus:ring-[#0EA5E9]/30"
            required />
        </div>

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
              value="<?= htmlspecialchars($row['harga'] ?? '', ENT_QUOTES) ?>"
              class="w-full border-none bg-transparent text-sm text-[#101828] outline-none focus:ring-0"
              placeholder="Masukkan harga (contoh: 750000)"
              required />
          </div>
        </div>

        <div>
          <label for="deskripsi" class="block text-sm font-semibold text-[#101828]">Deskripsi Produk</label>
          <textarea
            id="deskripsi"
            name="deskripsi"
            rows="4"
            class="mt-2 w-full rounded-xl border border-[#101828]/10 bg-white px-4 py-3 text-sm text-[#101828] shadow-sm focus:border-[#0EA5E9] focus:outline-none focus:ring-2 focus:ring-[#0EA5E9]/30"
            placeholder="Perbarui highlight, material, atau rekomendasi lensa."
            required><?= htmlspecialchars($row['deskripsi'] ?? '', ENT_QUOTES) ?></textarea>
        </div>

        <div>
          <label for="gambar" class="block text-sm font-semibold text-[#101828]">Foto Produk</label>
          <div class="mt-2 space-y-4">
            <div class="flex flex-col gap-3 rounded-xl border border-dashed border-[#101828]/20 bg-[#FCFAF5] p-6 text-sm text-[#101828]/70">
              <input
                type="file"
                id="gambar"
                name="gambar"
                accept="image/*"
                class="text-sm text-[#101828]" />
              <p class="text-xs text-[#101828]/60">Biarkan kosong jika tidak ingin mengganti foto. Format .jpg, .png, .webp maks 3MB.</p>
            </div>
            <?php if (!empty($row['gambar'])): ?>
              <div class="flex items-center gap-4 rounded-2xl border border-black/5 bg-white p-4">
                <img src="gambar/<?= htmlspecialchars($row['gambar']) ?>" alt="Foto Produk Saat Ini" class="h-24 w-24 rounded-xl object-cover" />
                <div>
                  <p class="text-sm font-semibold text-[#101828]">Foto saat ini</p>
                  <p class="text-xs text-[#101828]/60">Digunakan pada halaman produk.</p>
                </div>
              </div>
            <?php endif; ?>
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
            name="update"
            class="inline-flex items-center justify-center rounded-full bg-[#101828] px-6 py-3 text-sm font-semibold text-[#FCFAF5] shadow-lg shadow-[#101828]/20 transition hover:bg-[#0EA5E9]">
            Perbarui Produk
          </button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
