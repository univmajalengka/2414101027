<?php

// ==============================
// FUNGSI HITUNG DISKON
// ==============================
function hitungDiskon($totalBelanja) {

    if ($totalBelanja >= 100000) {
        $diskon = 0.1 * $totalBelanja;   // 10%
    } 
    elseif ($totalBelanja >= 50000) {
        $diskon = 0.05 * $totalBelanja;  // 5%
    } 
    else {
        $diskon = 0; // Tidak ada diskon
    }

    return $diskon;
}


// ==============================
// PROGRAM UTAMA
// ==============================

// Total belanja contoh
$totalBelanja = 120000;

// Memanggil fungsi
$diskon = hitungDiskon($totalBelanja);

// Menghitung total bayar
$totalBayar = $totalBelanja - $diskon;


// ==============================
// OUTPUT
// ==============================

echo "<h2>PERHITUNGAN DISKON</h2>";

echo "Total Belanja : Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
echo "Diskon        : Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total Bayar   : Rp " . number_format($totalBayar, 0, ',', '.') . "<br>";

?>
