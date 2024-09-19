<?php
function tampilkanPilihan() {
    echo "Pilih salah satu:\n";
    echo "1. Batu\n";
    echo "2. Gunting\n";
    echo "3. Kertas\n";
}

function tentukanPemenang($pilihanPengguna, $pilihanKomputer) {
    // Aturan permainan suit
    // 1 = Batu, 2 = Gunting, 3 = Kertas
    if ($pilihanPengguna == $pilihanKomputer) {
        return "Seri!";
    } elseif (
        ($pilihanPengguna == 1 && $pilihanKomputer == 2) ||
        ($pilihanPengguna == 2 && $pilihanKomputer == 3) ||
        ($pilihanPengguna == 3 && $pilihanKomputer == 1)
    ) {
        return "Anda Menang!";
    } else {
        return "Komputer Menang!";
    }
}

// Main program
tampilkanPilihan();
$pilihanPengguna = intval(trim(fgets(STDIN)));

if ($pilihanPengguna < 1 || $pilihanPengguna > 3) {
    echo "Pilihan tidak valid!\n";
    exit;
}

$pilihanKomputer = rand(1, 3);

// Menampilkan pilihan pengguna dan komputer
$pilihan = ["", "Batu", "Gunting", "Kertas"];
echo "Anda memilih: " . $pilihan[$pilihanPengguna] . "\n";
echo "Komputer memilih: " . $pilihan[$pilihanKomputer] . "\n";

// Menentukan pemenang
$hasil = tentukanPemenang($pilihanPengguna, $pilihanKomputer);
echo $hasil . "\n";
?>
