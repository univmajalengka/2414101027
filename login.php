<?php
include "db.php";
session_start();
$login_message = "";

if (isset($_SESSION["is_login"])) {
  header("location: dashboard.php");
}

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $enc_password = hash("sha256", $password);

  $sql = "SELECT * FROM users WHERE username='$username' AND password='$enc_password'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();

    $_SESSION["username"] = $data["username"];
    $_SESSION["is_login"] = true;

    header("location: dashboard.php");
  } else {
    $login_message = "Username atau Password salah!";
  }
  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZaOptik | Masuk Dashboard</title>
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

<body class="relative min-h-screen bg-[#FCFAF5] text-[#101828] antialiased">
  <div class="pointer-events-none absolute inset-0 -z-10">
    <div class="absolute -top-32 right-0 h-72 w-72 rounded-full bg-[#101828]/10 blur-3xl"></div>
    <div class="absolute bottom-0 left-10 h-80 w-80 rounded-full bg-[#0EA5E9]/10 blur-3xl"></div>
  </div>

  <div class="mx-auto flex min-h-screen w-full max-w-6xl flex-col overflow-hidden rounded-3xl border border-black/5 bg-white/70 shadow-2xl shadow-[#101828]/10 md:flex-row">
    <aside class="relative hidden w-full max-w-sm overflow-hidden bg-[#101828] md:block">
      <img src="gambar/fototoko.jpeg" alt="Interior ZaOptik" class="h-full w-full object-cover opacity-70" />
      <div class="absolute inset-0 bg-gradient-to-t from-[#101828] via-[#101828]/70 to-transparent"></div>
      <div class="absolute inset-x-0 bottom-0 p-10 text-[#FCFAF5]">
        <span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-[#FCFAF5]/10 text-2xl font-semibold">Z</span>
        <h2 class="mt-6 text-3xl font-semibold leading-snug">ZaOptik</h2>
        <p class="mt-3 text-sm text-[#FCFAF5]/80">Kelola katalog kacamata dan layanan optik Anda dalam satu dashboard elegan.</p>
      </div>
    </aside>

    <main class="flex flex-1 flex-col justify-center px-8 py-10 sm:px-12">
      <div class="mx-auto w-full max-w-md">
        <div class="mb-10">
          <p class="text-xs font-semibold uppercase tracking-wide text-[#101828]/60">Selamat datang kembali</p>
          <h1 class="mt-3 text-3xl font-semibold text-[#101828]">Masuk ke Dashboard ZaOptik</h1>
          <p class="mt-2 text-sm text-[#101828]/70">Masukkan kredensial untuk mengelola produk dan konten website.</p>
        </div>

        <form action="login.php" method="post" class="space-y-6">
          <div>
            <label for="username" class="block text-sm font-semibold text-[#101828]">Username</label>
            <input
              type="text"
              id="username"
              name="username"
              class="mt-2 w-full rounded-xl border border-[#101828]/10 bg-white px-4 py-3 text-sm text-[#101828] shadow-sm focus:border-[#0EA5E9] focus:outline-none focus:ring-2 focus:ring-[#0EA5E9]/30"
              placeholder="Masukkan Username"
              required />
          </div>
          <div>
            <label for="password" class="block text-sm font-semibold text-[#101828]">Kata Sandi</label>
            <input
              type="password"
              id="password"
              name="password"
              class="mt-2 w-full rounded-xl border border-[#101828]/10 bg-white px-4 py-3 text-sm text-[#101828] shadow-sm focus:border-[#0EA5E9] focus:outline-none focus:ring-2 focus:ring-[#0EA5E9]/30"
              placeholder="Masukkan password"
              required />
          </div>
          <button
            type="submit"
            name="login"
            class="inline-flex w-full items-center justify-center rounded-full bg-[#101828] px-6 py-3 text-sm font-semibold text-[#FCFAF5] shadow-lg shadow-[#101828]/20 transition hover:bg-[#0EA5E9]">
            Masuk
          </button>
        </form>

        <div class="mt-12 rounded-2xl border border-[#101828]/10 bg-[#FCFAF5] p-6 text-sm text-[#101828]/70">
          <p class="font-semibold text-[#101828]">Belum punya akses?</p>
          <p class="mt-2">Hubungi admin ZaOptik untuk dibuatkan akun dan dapatkan pelatihan singkat penggunaan dashboard.</p>
        </div>
        <a href="index.php" class="mt-6 inline-flex items-center gap-2 text-sm font-medium text-[#0EA5E9] transition hover:text-[#101828]">
          &larr; Kembali ke Homepage
        </a>
      </div>
    </main>
  </div>
</body>

</html>