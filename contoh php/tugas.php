<?php
// Data yang diberikan
$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_a = 0.05; // Bunga dalam bentuk desimal (5% = 0.05)
$hutang_b = 9500000;
$bunga_b = 0.045; // Bunga dalam bentuk desimal (4.5% = 0.045)

// Hitung bunga masing-masing hutang
$bunga_total_a = $hutang_a * $bunga_a;
$bunga_total_b = $hutang_b * $bunga_b;

// Hitung total bunga
$total_bunga = $bunga_total_a + $bunga_total_b;

// Hitung total hutang (pokok + bunga)
$total_hutang = $hutang_a + $hutang_b + $total_bunga;

// Hitung sisa uang
$sisa_uang = $pemasukan - $total_hutang;

// Tampilkan hasil
echo "Sisa uang: Rp " . number_format($sisa_uang, 0, ',', '.') . "<br>";
echo "Total bunga hutang: Rp " . number_format($total_bunga, 0, ',', '.') . "<br>";
echo "Total hutang: Rp " . number_format($total_hutang, 0, ',', '.') . "<br>";
?>