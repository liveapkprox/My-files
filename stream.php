<?php

$url = "https://shd-gcp-live.edgenextcdn.net/live/bitmovin-mbc-1-na/eec141533c90dd34722c503a296dd0d8/index.m3u8";

header("Content-Type: application/vnd.apple.mpegurl");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);
curl_close($ch);

echo $data;

?>