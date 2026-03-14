<?php

class Kapal {
    public function jalan() {
        echo "Kapal sedang berjalan";
    }
}

class KapalPenumpang extends Kapal {
    public function jalan() {
        echo "Kapal penumpang membawa banyak orang";
    }
}

class KapalBarang extends Kapal {
    public function jalan() {
        echo "Kapal barang mengangkut barang";
    }
}

$kapal1 = new KapalPenumpang();
$kapal2 = new KapalBarang();

$kapal1->jalan();
echo "<br>";
$kapal2->jalan();

?>