<?php
header("Access-Control-Allow-Origin: *");
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $_GET['url']
    ));
    curl_exec($curl);
?>