<?php
    // Cek Saldo SMS
    $url = "https://console.zenziva.net/api/balance/?userkey=fd3249003a68&passkey=f4fb0d8835ab3b26eeb1c391";
    $xml = simplexml_load_file($url);
    $value1 = (string)$xml->message[0]->value;
    $value2 = (string)$xml->message[0]->text;
    // echo "Sisa Saldo : ".$value1." SMS <br>Berlaku Sampai : "; echo $value2;
?>