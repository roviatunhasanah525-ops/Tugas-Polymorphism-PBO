<?php

interface Notifikasi {
    public function kirim();
}

class Email implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui Email";
    }
}

class SMS implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui SMS";
    }
}

class WhatsApp implements Notifikasi {
    public function kirim() {
        echo "Notifikasi dikirim melalui WhatsApp";
    }
}

$email = new Email();
$sms = new SMS();
$wa = new WhatsApp();

$email->kirim();
echo "<br>";
$sms->kirim();
echo "<br>";
$wa->kirim();

?>