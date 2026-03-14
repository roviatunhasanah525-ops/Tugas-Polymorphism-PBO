<?php

class BangunDatar {
    public function hitungLuas() {
        echo "Menghitung luas bangun datar";
    }
}

class Persegi extends BangunDatar {
    public function hitungLuas() {
        $sisi = 5;
        $luas = $sisi * $sisi;
        echo "Luas Persegi : " . $luas;
    }
}

class Lingkaran extends BangunDatar {
    public function hitungLuas() {
        $r = 7;
        $luas = 3.14 * $r * $r;
        echo "Luas Lingkaran : " . $luas;
    }
}

class Segitiga extends BangunDatar {
    public function hitungLuas() {
        $alas = 6;
        $tinggi = 8;
        $luas = 0.5 * $alas * $tinggi;
        echo "Luas Segitiga : " . $luas;
    }
}

$persegi = new Persegi();
$lingkaran = new Lingkaran();
$segitiga = new Segitiga();

$persegi->hitungLuas();
echo "<br>";
$lingkaran->hitungLuas();
echo "<br>";
$segitiga->hitungLuas();

?>