<?php
// الرابط الحقيقي للبث
$real_stream = "https://shd-gcp-live.edgenextcdn.net/live/bitmovin-mbc-1-na/eec141533c90dd34722c503a296dd0d8/index.m3u8";

// تحويل المستخدم للرابط الحقيقي
header("Location: $real_stream");
exit;
?>