<?php 
    date_default_timezone_set('Asia/Jakarta');
    class Zenziva extends Database
    {

        function sendMessage($no, $pesan)
        {
            
            $userkey = "fd3249003a68"; //userkey lihat di zenziva
            $passkey = "f4fb0d8835ab3b26eeb1c391"; // set passkey di zenziva
            $telepon = $no;
            $message = $pesan;
            $url = "https://console.zenziva.net/reguler/api/sendsms/";
            $curlHandle = curl_init();
            curl_setopt($curlHandle, CURLOPT_URL, $url);
            curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey='.$userkey.'&passkey='.$passkey.'&nohp='.$telepon.'&pesan='.urlencode($message));
            curl_setopt($curlHandle, CURLOPT_HEADER, 0);
            curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
            curl_setopt($curlHandle, CURLOPT_POST, 1);
            $results = curl_exec($curlHandle);
            curl_close($curlHandle);
            
            $XMLdata = new SimpleXMLElement($results);
            $status = $XMLdata->message[0]->text;

            return $status;
        }
    }
?>