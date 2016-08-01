<?php

//file_get_contents can do a POST, create a context for that first:

$opts = array('http' =>
  array(
    'method'  => 'POST',
    'header'  => "Content-Type: text/xml\r\n".
      "Authorization: Basic ".base64_encode("$https_user:$https_password")."\r\n",
    'content' => $body,
    'timeout' => 60
  )
);
                       
$context  = stream_context_create($opts);
$url = 'https://'.$https_server;
$result = file_get_contents($url, false, $context, -1, 40000);