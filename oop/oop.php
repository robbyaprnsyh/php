<?php
// buat class
class Manusia{

    // buat property / atribut
    public $nama = "Robby";

    // buat method / function
    public function makan(): void{
        echo "$this->nama suka makan ayam";
    }
    public function minum(): void{
        echo $this -> makan()."<br>";
        echo "Surya suka minum powerZ";
    }

}

// buat object
$cetak = new Manusia();

echo $cetak -> nama;
echo "<br>";
echo $cetak -> makan();
echo "<br>";
echo $cetak -> minum();

?>