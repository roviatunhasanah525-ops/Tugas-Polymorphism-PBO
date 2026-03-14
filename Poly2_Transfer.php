<?php

class Transfer {
    public function proses() {
        echo "Melakukan proses transfer";
    }
}

class TransferBank extends Transfer {
    public function proses() {
        echo "Transfer melalui Bank";
    }
}

class TransferEwallet extends Transfer {
    public function proses() {
        echo "Transfer melalui E-Wallet";
    }
}

$bank = new TransferBank();
$ewallet = new TransferEwallet();

$bank->proses();
echo "<br>";
$ewallet->proses();

?>