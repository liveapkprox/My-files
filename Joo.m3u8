<?php

$url = "http://135.125.109.73:9000/beinsportnew_.m3u8";

header("Content-Type: application/vnd.apple.mpegurl");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);
curl_close($ch);

echo $data;

?>
