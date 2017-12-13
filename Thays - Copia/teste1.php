<?php
$url  = 'https://app.squidfacil.com.br/oauth';
$data = ['grant_type' => 'client_credentials'];
$ch   = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$result = curl_exec($ch);

curl_close($ch);
?>