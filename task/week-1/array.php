<?php
// Deklarasi array dengan data angka
$angka = array(1, 2, 3, 4, 5, 2, 4, 6, 3, 2);

// Fungsi untuk mencari angka yang sama
function cariAngkaSama($array)
{
    // Array untuk menyimpan jumlah kemunculan tiap angka
    $jumlahAngka = array();

    // Menghitung kemunculan tiap angka dalam array
    foreach ($array as $item) {
        if (array_key_exists($item, $jumlahAngka)) {
            $jumlahAngka[$item]++; // Jika angka sudah ada, tambahkan 1
        } else {
            $jumlahAngka[$item] = 1; // Jika belum ada, set jadi 1
        }
    }

    // Menyimpan angka yang muncul lebih dari satu kali
    $angkaSama = array();
    foreach ($jumlahAngka as $key => $value) {
        if ($value > 1) {
            $angkaSama[] = $key;
        }
    }

    return $angkaSama;
}

// Panggil fungsi dan tampilkan hasilnya
$hasil = cariAngkaSama($angka);
echo "Angka yang sama dalam array: " . implode(", ", $hasil);
