<?php
// Input jumlah bayar
$jumlahBayar = 100000;

// Hitung diskon
$diskon = 0;
if ($jumlahBayar >= 500000) {
  $diskon = 50;
} elseif ($jumlahBayar >= 100000) {
  $diskon = 10;
} elseif ($jumlahBayar >= 50000) {
  $diskon = 5;
}

// Hitung total harga
$totalHarga = $jumlahBayar - ($jumlahBayar * $diskon / 100);

// Tampilkan hasil
echo "Jumlah bayar: " . $jumlahBayar . "\n";
echo "Diskon: " . $diskon . "%\n";
echo "Total harga: " . $totalHarga . "\n";
?>