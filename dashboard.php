<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZaOptik | Dashboard Produk</title>
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
  <?php
  include 'db.php';

  $sql = "SELECT * FROM produk ORDER BY created_at DESC";
  $result = $conn->query($sql);
  ?>

  <header class="border-b border-black/5 bg-white/70 backdrop-blur">
    <div class="mx-auto flex max-w-6xl flex-col gap-4 px-6 py-6 sm:flex-row sm:items-center sm:justify-between">
      <div>
        <p class="text-xs font-semibold uppercase tracking-wide text-[#101828]/60">Dashboard ZaOptik</p>
        <h1 class="text-2xl font-semibold text-[#101828]">Kelola Koleksi Kacamata</h1>
      </div>
      <div class="flex flex-wrap items-center gap-3">
        <a
          href="index.php"
          class="inline-flex items-center justify-center rounded-full border border-[#101828]/20 px-4 py-2 text-sm font-medium text-[#101828] transition hover:border-[#0EA5E9] hover:text-[#0EA5E9]">Lihat Homepage</a>
        <a
          href="create.php"
          class="inline-flex items-center justify-center rounded-full bg-[#101828] px-5 py-2 text-sm font-semibold text-[#FCFAF5] shadow-lg shadow-[#101828]/20 transition hover:bg-[#0EA5E9]">Tambah Produk</a>
      </div>
    </div>
  </header>

  <main class="mx-auto max-w-6xl px-6 py-12">
    <div class="rounded-3xl border border-black/5 bg-white/70 p-8 shadow-xl shadow-[#101828]/5">
      <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
        <div>
          <h2 class="text-xl font-semibold text-[#101828]">Daftar Produk</h2>
          <p class="text-sm text-[#101828]/60">Pantau dan kelola stok frame serta deskripsinya.</p>
        </div>
        <span class="inline-flex items-center rounded-full bg-[#101828]/5 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-[#101828]">
          <?= $result ? $result->num_rows : 0 ?> Produk
        </span>
      </div>

      <div class="mt-8 overflow-hidden rounded-2xl border border-black/5 bg-white shadow-sm shadow-[#101828]/5">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-[#101828]/10 text-sm">
            <thead class="bg-[#FCFAF5] text-xs font-semibold uppercase tracking-wide text-[#101828]/70">
              <tr>
                <th scope="col" class="px-5 py-4 text-left">No</th>
                <th scope="col" class="px-5 py-4 text-left">Produk</th>
                <th scope="col" class="px-5 py-4 text-left">Harga</th>
                <th scope="col" class="px-5 py-4 text-left">Deskripsi</th>
                <th scope="col" class="px-5 py-4 text-left">Foto</th>
                <th scope="col" class="px-5 py-4 text-left">Aksi</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-[#101828]/10 text-[#101828]/80">
              <?php if ($result && $result->num_rows > 0): ?>
                <?php $no = 1; ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                  <?php
                  $hargaRaw = $row['harga'] ?? null;
                  $hargaFormatted = is_numeric($hargaRaw) ? 'Rp ' . number_format((float) $hargaRaw, 0, ',', '.') : 'Belum diatur';
                  ?>
                  <tr class="transition hover:bg-[#FCFAF5]">
                    <td class="px-5 py-4 font-semibold text-[#101828]"><?= $no++; ?></td>
                    <td class="px-5 py-4">
                      <p class="font-semibold text-[#101828]"><?= htmlspecialchars($row['nama']) ?></p>
                    </td>
                    <td class="px-5 py-4 font-semibold text-[#101828]"><?= htmlspecialchars($hargaFormatted) ?></td>
                    <td class="px-5 py-4 text-sm text-[#101828]/70"><?= htmlspecialchars($row['deskripsi']) ?></td>
                    <td class="px-5 py-4">
                      <img
                        src="gambar/<?= htmlspecialchars($row['gambar']) ?>"
                        alt="Produk <?= htmlspecialchars($row['nama']) ?>"
                        class="h-16 w-16 rounded-xl object-cover shadow-sm" />
                    </td>
                    <td class="px-5 py-4">
                      <div class="flex flex-wrap items-center gap-2">
                        <a
                          href="update.php?id=<?= urlencode($row['id']) ?>"
                          class="inline-flex items-center justify-center rounded-full bg-[#101828] px-4 py-2 text-xs font-semibold uppercase tracking-wide text-[#FCFAF5] transition hover:bg-[#0EA5E9]">
                          Edit
                        </a>
                        <a
                          href="delete.php?id=<?= urlencode($row['id']) ?>"
                          onclick="return confirm('Yakin ingin menghapus produk ini?')"
                          class="inline-flex items-center justify-center rounded-full border border-red-500/40 px-4 py-2 text-xs font-semibold uppercase tracking-wide text-red-600 transition hover:border-red-500 hover:bg-red-50">
                          Hapus
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php endwhile; ?>
              <?php else: ?>
                <tr>
                  <td colspan="6" class="px-5 py-10 text-center text-sm text-[#101828]/60">
                    Belum ada produk. <a href="create.php" class="font-semibold text-[#0EA5E9] hover:text-[#101828]">Tambah produk pertama</a>
                  </td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>

  <?php if (isset($conn) && $conn instanceof mysqli) {
    $conn->close();
  } ?>
</body>

</html>
