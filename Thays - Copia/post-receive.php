<?php
header('Authorization: Bearer 2d6a263ba8156f312b210cd4d2fa975e8d0e5318');
$url  = $HTTP_POST_FILES['https://app.squidfacil.com.br/oauth'] ;
$fields = array(
    'grant_type'=>'client_credentials'
);
$username ='27b00ef6-3c31-4258-82e6-dce75e93e922';
$password = '9EpPN3DMZacSvpW5RFXrUtl4sfnU7jxMLb43vtSY';
$ch   = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

$result = curl_exec($ch);


curl_close($ch);
