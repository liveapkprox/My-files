<?php

$id = $_GET['id'];

$streams = [
"mbc1" => "https://shd-gcp-live.edgenextcdn.net/live/bitmovin-mbc-1-na/eec141533c90dd34722c503a296dd0d8/index.m3u8"
];

if(!isset($streams[$id])){
 die("Channel not found");
}

header("Location: ".$streams[$id]);
exit;

?>