<!DOCTYPE html>
<html>
<head>
<title>Live Stream</title>
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
</head>

<body>

<video id="video" controls autoplay width="100%"></video>

<script>
var video = document.getElementById('video');
var videoSrc = "https://shd-gcp-live.edgenextcdn.net/live/bitmovin-mbc-1-na/eec141533c90dd34722c503a296dd0d8/index.m3u8";

if (Hls.isSupported()) {
    var hls = new Hls();
    hls.loadSource(videoSrc);
    hls.attachMedia(video);
}
</script>

</body>
</html>