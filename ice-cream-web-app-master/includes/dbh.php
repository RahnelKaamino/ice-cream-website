<?php
include 'URL.php';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $URL_SERVER);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
?>