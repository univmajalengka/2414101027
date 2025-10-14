<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZaOptik | Optik Kacamata Profesional</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Poppins', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }
  </style>
</head>

<body class="bg-[#FCFAF5] text-[#101828] antialiased">
  <?php
  include 'db.php';
  $sql = "SELECT * FROM produk ORDER BY created_at DESC";
  $result = $conn->query($sql);
  ?>

  <header class="border-b border-black/5 bg-white/70 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
      <div class="flex items-center gap-2">
        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#101828] text-[#FCFAF5] text-xl font-semibold">Z</span>
        <span class="text-xl font-semibold tracking-wide text-[#101828]">ZaOptik</span>
      </div>
      <button id="navToggle" class="inline-flex items-center justify-center rounded-md border border-[#101828]/10 px-3 py-2 text-sm font-medium text-[#101828] transition hover:bg-[#101828] hover:text-[#FCFAF5] lg:hidden" aria-label="Toggle navigation">
        <svg id="iconOpen" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <svg id="iconClose" xmlns="http://www.w3.org/2000/svg" class="hidden h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
      <nav id="navMenu" class="hidden flex-1 flex-col items-center gap-6 text-sm font-medium lg:flex lg:flex-row lg:justify-end">
        <a class="transition hover:text-[#0EA5E9]" href="#beranda">Beranda</a>
        <a class="transition hover:text-[#0EA5E9]" href="#produk">Produk</a>
        <a class="transition hover:text-[#0EA5E9]" href="#testimoni">Testimoni</a>
        <a class="transition hover:text-[#0EA5E9]" href="#faq">FAQ</a>
        <a class="transition hover:text-[#0EA5E9]" href="#kontak">Kontak</a>
        <a class="rounded-full bg-[#101828] px-5 py-2 text-sm text-[#FCFAF5] transition hover:bg-[#0EA5E9]" href="login.php" rel="noopener">Masuk</a>
      </nav>
    </div>
    <div id="mobileNav" class="mx-auto hidden max-w-6xl px-6 pb-6 lg:hidden">
      <nav class="flex flex-col gap-4 rounded-2xl border border-black/5 bg-white/90 p-5 shadow-lg">
        <a class="text-sm font-medium transition hover:text-[#0EA5E9]" href="#beranda">Beranda</a>
        <a class="text-sm font-medium transition hover:text-[#0EA5E9]" href="#produk">Produk</a>
        <a class="text-sm font-medium transition hover:text-[#0EA5E9]" href="#testimoni">Testimoni</a>
        <a class="text-sm font-medium transition hover:text-[#0EA5E9]" href="#faq">FAQ</a>
        <a class="text-sm font-medium transition hover:text-[#0EA5E9]" href="#kontak">Kontak</a>
        <a class="inline-flex items-center justify-center rounded-full bg-[#101828] px-5 py-2 text-sm text-[#FCFAF5] transition hover:bg-[#0EA5E9]" href="login.php" rel="noopener">Masuk</a>
      </nav>
    </div>
  </header>

  <main id="beranda">
    <section class="relative overflow-hidden">
      <div class="absolute inset-y-0 right-0 hidden w-1/2 bg-[#101828]/5 lg:block"></div>
      <div class="mx-auto flex max-w-6xl flex-col gap-12 px-6 py-16 lg:flex-row lg:items-center">
        <div class="w-full lg:w-1/2">
          <span class="inline-flex items-center gap-2 rounded-full bg-[#101828]/5 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-[#101828]">Optik Profesional</span>
          <h1 class="mt-6 font-semibold text-4xl leading-tight text-[#101828] md:text-5xl">ZaOptik — Wujudkan Penglihatan Jernih dengan Gaya Masa Kini</h1>
          <p class="mt-4 text-base text-[#101828]/70 md:text-lg">Koleksi kacamata terbaik dengan lensa berkualitas, pemeriksaan mata profesional, dan pelayanan ramah. Temukan pasangan kacamata ideal yang menunjang aktivitas Anda setiap hari.</p>
          <div class="mt-8 flex flex-col gap-4 sm:flex-row">
            <a class="inline-flex items-center justify-center rounded-full bg-[#101828] px-6 py-3 text-sm font-semibold text-[#FCFAF5] shadow-lg shadow-[#101828]/20 transition hover:bg-[#0EA5E9]" href="#produk">Jelajahi Koleksi</a>
            <a class="inline-flex items-center justify-center rounded-full border border-[#101828] px-6 py-3 text-sm font-semibold text-[#101828] transition hover:border-[#0EA5E9] hover:text-[#0EA5E9]" href="https://wa.me/6289513160941?text=Halo%20ZaOptik%2C%20saya%20ingin%20membuat%20janji%20pemeriksaan%20mata." target="_blank" rel="noopener">Buat Janji Pemeriksaan</a>
          </div>
        </div>
        <div class="w-full lg:w-1/2">
          <div class="relative aspect-[3/2] overflow-hidden rounded-3xl border border-[#101828]/10 bg-white shadow-2xl shadow-[#101828]/20">
            <img src="gambar/fototoko.jpeg" alt="Tampilan depan toko ZaOptik" class="h-full w-full object-cover" />
            <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[#101828]/80 via-[#101828]/40 to-transparent p-6 text-sm text-[#FCFAF5]">
              <p class="font-semibold">Kunjungi Showroom Kami</p>
              <p class="mt-1 text-xs text-[#FCFAF5]/80">Jl. Majalengka • Buka setiap hari 09.00 – 21.00 WIB</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="produk" class="mx-auto max-w-6xl px-6 py-16">
      <div class="flex flex-col gap-6 text-center">
        <span class="mx-auto inline-flex items-center gap-2 rounded-full bg-[#101828]/5 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-[#101828]">Koleksi Terbaru</span>
        <h2 class="text-3xl font-semibold text-[#101828] md:text-4xl">Pilihan Kacamata untuk Setiap Karakter</h2>
        <p class="mx-auto max-w-2xl text-sm text-[#101828]/70 md:text-base">Setiap frame diseleksi dengan desain modern dan kenyamanan optimal. Klik beli untuk konsultasi personal lewat WhatsApp kami.</p>
      </div>
      <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <?php if ($result && $result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
            <?php
            $productName = $row['nama'] ?? '';
            $productDesc = $row['deskripsi'] ?? '';
            $productPriceRaw = $row['harga'] ?? null;
            $productPrice = is_numeric($productPriceRaw) ? (float) $productPriceRaw : null;
            $formattedPrice = $productPrice !== null && $productPrice > 0 ? 'Rp ' . number_format($productPrice, 0, ',', '.') : 'Hubungi kami untuk harga';
            $waMessage = rawurlencode("Halo ZaOptik, saya tertarik dengan produk " . $productName . ". Apakah masih tersedia?");
            ?>
            <article class="group flex h-full flex-col overflow-hidden rounded-3xl border border-black/5 bg-white/80 backdrop-blur transition hover:-translate-y-1 hover:shadow-xl hover:shadow-[#101828]/10">
              <div class="relative aspect-[4/3] overflow-hidden bg-[#101828]/5">
                <img
                  src="gambar/<?= htmlspecialchars($row['gambar']) ?>"
                  alt="Kacamata <?= htmlspecialchars($productName) ?>"
                  class="h-full w-full object-cover transition duration-500 group-hover:scale-105" />
              </div>
              <div class="flex flex-1 flex-col gap-4 p-6">
                <div>
                  <h3 class="text-lg font-semibold text-[#101828]"><?= htmlspecialchars($productName) ?></h3>
                  <p class="mt-2 text-sm leading-relaxed text-[#101828]/70"><?= nl2br(htmlspecialchars($productDesc)) ?></p>
                </div>
                <div class="mt-auto flex items-center justify-between gap-3">
                  <span class="text-sm font-semibold text-[#101828]"><?= htmlspecialchars($formattedPrice) ?></span>
                  <a
                    class="inline-flex items-center gap-2 rounded-full bg-[#101828] px-4 py-2 text-xs font-semibold uppercase tracking-wide text-[#FCFAF5] transition hover:bg-[#0EA5E9]"
                    href="https://wa.me/6289513160941?text=<?= htmlspecialchars($waMessage) ?>"
                    target="_blank"
                    rel="noopener">
                    Beli via WA
                  </a>
                </div>
              </div>
            </article>
          <?php endwhile; ?>
        <?php else: ?>
          <div class="col-span-full flex flex-col items-center justify-center rounded-3xl border border-dashed border-[#101828]/20 bg-white/60 p-16 text-center">
            <h3 class="text-xl font-semibold text-[#101828]">Produk segera hadir</h3>
            <p class="mt-3 max-w-sm text-sm text-[#101828]/70">Koleksi terbaru sedang kami persiapkan. Hubungi kami untuk mendapatkan kurasi kacamata sesuai kebutuhan Anda.</p>
            <a class="mt-6 inline-flex items-center justify-center rounded-full bg-[#101828] px-5 py-2 text-sm font-semibold text-[#FCFAF5] transition hover:bg-[#0EA5E9]" href="https://wa.me/6289513160941?text=Halo%20ZaOptik%2C%20saya%20ingin%20diinformasikan%20saat%20produk%20baru%20tersedia." target="_blank" rel="noopener">Hubungi ZaOptik</a>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <section id="testimoni" class="bg-white/70 py-16">
      <div class="mx-auto max-w-6xl px-6">
        <div class="flex flex-col gap-6 text-center">
          <span class="mx-auto inline-flex items-center gap-2 rounded-full bg-[#101828]/5 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-[#101828]">Testimoni</span>
          <h2 class="text-3xl font-semibold text-[#101828] md:text-4xl">Cerita Pelanggan yang Puas</h2>
          <p class="mx-auto max-w-2xl text-sm text-[#101828]/70 md:text-base">Kami bangga menjadi pilihan terpercaya keluarga, profesional, hingga kreator konten dalam mendapatkan pengalaman penglihatan yang lebih baik.</p>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
          <figure class="flex h-full flex-col gap-4 rounded-3xl border border-black/5 bg-[#FCFAF5] p-8 shadow-md shadow-[#101828]/10">
            <blockquote class="text-sm leading-relaxed text-[#101828]/80">"ZaOptik membantu saya menemukan frame yang pas untuk wajah saya. Lensa progresifnya nyaman dipakai sejak hari pertama."</blockquote>
            <figcaption class="mt-auto">
              <p class="text-sm font-semibold text-[#101828]">Dian Putri</p>
              <p class="text-xs text-[#101828]/60">Marketing Manager</p>
            </figcaption>
          </figure>
          <figure class="flex h-full flex-col gap-4 rounded-3xl border border-black/5 bg-[#FCFAF5] p-8 shadow-md shadow-[#101828]/10">
            <blockquote class="text-sm leading-relaxed text-[#101828]/80">"Pelayanan pemeriksaan matanya detail, staff sangat sabar menjelaskan pilihan lensa. Sangat rekomendasi untuk keluarga."</blockquote>
            <figcaption class="mt-auto">
              <p class="text-sm font-semibold text-[#101828]">Yusuf Rahman</p>
              <p class="text-xs text-[#101828]/60">Pengusaha</p>
            </figcaption>
          </figure>
          <figure class="flex h-full flex-col gap-4 rounded-3xl border border-black/5 bg-[#FCFAF5] p-8 shadow-md shadow-[#101828]/10">
            <blockquote class="text-sm leading-relaxed text-[#101828]/80">"Frame modis, ringan, dan cocok untuk aktivitas konten saya. Proses pemesanan via WA juga sangat responsif."</blockquote>
            <figcaption class="mt-auto">
              <p class="text-sm font-semibold text-[#101828]">Salsa Aulia</p>
              <p class="text-xs text-[#101828]/60">Content Creator</p>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <section id="faq" class="mx-auto max-w-6xl px-6 py-16">
      <div class="flex flex-col gap-6 text-center">
        <span class="mx-auto inline-flex items-center gap-2 rounded-full bg-[#101828]/5 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-[#101828]">FAQ</span>
        <h2 class="text-3xl font-semibold text-[#101828] md:text-4xl">Pertanyaan yang Sering Diajukan</h2>
        <p class="mx-auto max-w-2xl text-sm text-[#101828]/70 md:text-base">Masih ragu? Berikut beberapa informasi yang bisa membantu sebelum Anda mengunjungi ZaOptik.</p>
      </div>
      <div class="mt-12 space-y-4">
        <details class="group overflow-hidden rounded-2xl border border-black/5 bg-white/70 p-6">
          <summary class="flex cursor-pointer items-center justify-between text-left text-sm font-semibold text-[#101828] transition group-open:text-[#0EA5E9]">
            Berapa lama proses pembuatan kacamata?
            <span class="ml-4 text-[#101828]/40 transition group-open:rotate-45 group-open:text-[#0EA5E9]">+</span>
          </summary>
          <div class="mt-4 text-sm leading-relaxed text-[#101828]/70">Untuk lensa standar, proses selesai dalam 1–2 hari kerja. Lensa khusus seperti progresif atau blue-light premium membutuhkan 3–5 hari kerja.</div>
        </details>
        <details class="group overflow-hidden rounded-2xl border border-black/5 bg-white/70 p-6">
          <summary class="flex cursor-pointer items-center justify-between text-left text-sm font-semibold text-[#101828] transition group-open:text-[#0EA5E9]">
            Apakah tersedia layanan pemeriksaan mata di tempat?
            <span class="ml-4 text-[#101828]/40 transition group-open:rotate-45 group-open:text-[#0EA5E9]">+</span>
          </summary>
          <div class="mt-4 text-sm leading-relaxed text-[#101828]/70">Tentu, kami memiliki optometris berpengalaman yang siap melakukan pemeriksaan mata lengkap setiap hari. Cukup buat janji terlebih dahulu melalui WhatsApp.</div>
        </details>
        <details class="group overflow-hidden rounded-2xl border border-black/5 bg-white/70 p-6">
          <summary class="flex cursor-pointer items-center justify-between text-left text-sm font-semibold text-[#101828] transition group-open:text-[#0EA5E9]">
            Apakah bisa memesan frame sesuai resep dokter?
            <span class="ml-4 text-[#101828]/40 transition group-open:rotate-45 group-open:text-[#0EA5E9]">+</span>
          </summary>
          <div class="mt-4 text-sm leading-relaxed text-[#101828]/70">Bisa. Bawa resep dari dokter mata Anda, kami akan bantu memilih frame serta lensa yang sesuai kebutuhan.</div>
        </details>
        <details class="group overflow-hidden rounded-2xl border border-black/5 bg-white/70 p-6">
          <summary class="flex cursor-pointer items-center justify-between text-left text-sm font-semibold text-[#101828] transition group-open:text-[#0EA5E9]">
            Bisakah memesan dari luar kota?
            <span class="ml-4 text-[#101828]/40 transition group-open:rotate-45 group-open:text-[#0EA5E9]">+</span>
          </summary>
          <div class="mt-4 text-sm leading-relaxed text-[#101828]/70">Kami melayani pemesanan dan konsultasi jarak jauh. Pengiriman dilakukan menggunakan ekspedisi terpercaya lengkap dengan perlindungan paket.</div>
        </details>
      </div>
    </section>

    <section id="kontak" class="bg-[#101828] py-16 text-[#FCFAF5]">
      <div class="mx-auto flex max-w-6xl flex-col gap-10 px-6 lg:flex-row lg:items-center">
        <div class="w-full lg:w-2/3">
          <h2 class="text-3xl font-semibold md:text-4xl">Siap meningkatkan kualitas penglihatan Anda?</h2>
          <p class="mt-4 text-sm text-[#FCFAF5]/80 md:text-base">Hubungi tim optik kami untuk konsultasi gratis, atau kunjungi ZaOptik secara langsung. Kami siap membantu memilihkan kacamata terbaik yang menonjolkan gaya Anda.</p>
        </div>
        <div class="w-full lg:w-1/3">
          <div class="rounded-3xl border border-[#FCFAF5]/20 bg-[#FCFAF5]/5 p-6 text-sm">
            <p class="font-semibold uppercase tracking-wide text-[#FCFAF5]/90">Kontak & Lokasi</p>
            <ul class="mt-4 space-y-3 text-[#FCFAF5]/80">
              <li>WhatsApp: <a class="font-semibold text-[#0EA5E9]" href="https://wa.me/6289513160941" target="_blank" rel="noopener">+62 895-1316-0941</a></li>
              <li>Alamat: Jl. Majalengka</li>
            </ul>
            <a class="mt-6 inline-flex w-full items-center justify-center rounded-full bg-[#FCFAF5] px-6 py-3 text-sm font-semibold text-[#101828] transition hover:bg-[#0EA5E9] hover:text-white" href="https://wa.me/6289513160941?text=Halo%20ZaOptik%2C%20saya%20ingin%20bertanya%20lebih%20lanjut." target="_blank" rel="noopener">Chat WhatsApp Sekarang</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="border-t border-black/5 bg-white/80">
    <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-6 py-6 text-center text-xs text-[#101828]/60 sm:flex-row sm:text-left">
      <p>&copy; <?= date('Y') ?> ZaOptik. Seluruh hak cipta dilindungi.</p>
      <div class="flex flex-wrap items-center gap-4">
        <a class="transition hover:text-[#0EA5E9]" href="#produk">Koleksi</a>
        <a class="transition hover:text-[#0EA5E9]" href="#testimoni">Testimoni</a>
        <a class="transition hover:text-[#0EA5E9]" href="#faq">FAQ</a>
      </div>
    </div>
  </footer>

  <?php if (isset($conn) && $conn instanceof mysqli) {
    $conn->close();
  } ?>

  <script>
    const navToggle = document.getElementById('navToggle');
    const mobileNav = document.getElementById('mobileNav');
    const iconOpen = document.getElementById('iconOpen');
    const iconClose = document.getElementById('iconClose');

    navToggle?.addEventListener('click', () => {
      mobileNav.classList.toggle('hidden');
      iconOpen.classList.toggle('hidden');
      iconClose.classList.toggle('hidden');
    });

    document.querySelectorAll('#mobileNav a').forEach((link) => {
      link.addEventListener('click', () => {
        mobileNav.classList.add('hidden');
        iconOpen.classList.remove('hidden');
        iconClose.classList.add('hidden');
      });
    });
  </script>
</body>

</html>