<?php
$kelas = array(
    array("Nim" => "123", "Nama" => "Budi", "Jurusan" => "Informatika"),
    array("Nim" => "124", "Nama" => "Sita", "Jurusan" => "Matematika"),
    array("Nim" => "125", "Nama" => "Ani", "Jurusan" => "Fisika"),
);

// Menampilkan elemen array multidimensi
echo $kelas[0]["Nama"]; // Output: Budi
echo $kelas[1]["Jurusan"]; // Output: Matematika
