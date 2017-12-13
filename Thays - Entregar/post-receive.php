<?php
$url  = 'https://app.squidfacil.com.br/oauth';
$fields = array(
    'grant_type'=>'client_credentials'
);
$username ='27b00ef6-3c31-4258-82e6-dce75e93e922';
$password = 'w2SwAztCBxX/9tKstQjcpyMeCmSU8jco+JMv9B6b';
$ch   = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

$result = curl_exec($ch);

curl_close($ch);
?>