<?php

$url = "https://7seen.xyz/live/7seen/main/40.m3u8";

header("Content-Type: application/vnd.apple.mpegurl");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);
curl_close($ch);

echo $data;

?>