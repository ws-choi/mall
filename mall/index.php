<?php include ("header.php"); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://rochestb.github.io/jQuery.YoutubeBackground/src/jquery.youtubebackground.js"></script>
    <div id="video" class="background-video"></div>
    <script>
        $('#video').YTPlayer({
            fitToBackground: true,
            videoId: 'ZbofJucjkSU'
        });
    </script>
    <style>
        .background-video {
            background-position: top center;
            background-repeat: no-repeat;
            bottom: 0;
            left: 0;
            overflow: hidden;
            position: fixed;
            right: 0;
            top: 0;
        }
        .navbar {
            z-index:999;
        }
        h1, p {
            padding: 0px 30px 0px 30px;
            text-align:center;
        }
        h1 {
            font-weight:800;
        }
        .container {
            position: relative;
            background: rgba(255, 255, 255, .9);
        }
        .ref {
            font-weight:200;
            font-size:0.5em;
        }
    </style>
    <div class='container'>
        <p align="center"><img src="images/banner.PNG" width="100%"></p>
        <h1>K-Mall</h1>
        <p>전세계 350여개국의 상품 중 최고의 제품을 선정하여 적절한 가격에 제공하는 신개념 소셜 커머스입니다.</br><b>바로 오늘 시작하세요!</b></p>
        <p class="ref">본 사이트에서 사용된 리소스는 학술적 용도로만 사용되었으며, 상업적 사용은 제한됩니다. *1 : 배경 youtube 동영상의 모든 권리는 <a href="https://www.youtube.com/watch?v=LSmgKRx5pBo">Joel Cosson</a>에 있습니다. *2 : 배너 이미지의 모든 권리는 <a href="vitatra.de">vitatra</a>에 있습니다. *3 : youtube background player의 모든 권리는 <a href="https://github.com/rochestb/jQuery.YoutubeBackground">rochestb</a>에 있습니다.</p>
    </div>
<?php include ("footer.php"); ?>