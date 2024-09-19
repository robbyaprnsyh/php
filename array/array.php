<?php
// Membuat array dengan indeks numerik
$buah = array("Apel", "Jeruk", "Mangga");

// Mengakses elemen array
echo $buah[0]; // Output: Apel
echo $buah[1]; // Output: Jeruk
echo $buah[2]; // Output: Mangga

// Menambahkan elemen baru ke array
$buah[5] = "semangka";
print_r($buah); // Output: Array ( [0] => Apel [1] => Jeruk [2] => Mangga [3] => Pisang )
