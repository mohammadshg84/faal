<?php

$rand = rand(1, 160);
$url = "https://files.namnak.com/fall/$rand.gif";
echo '<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>فال حافظ آنلاین</title>
    <meta name="description" content="سرویس فال حافظ آنلاین">
    <meta name="author" content="محمدصادق حسن پور">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <meta property="og:title" content="فال حافظ آنلاین">
    <meta property="og:description" content="سرویس فال حافظ آنلاین">
    <link href="style.css?v=202212211953" rel="stylesheet" type="text/css">
    <!--<link rel="shortcut icon" href="" type="image/x-icon">-->
    <script data-host="https://statsfa.com" data-dnt="false" src="https://statsfa.com/js/script.js" id="ZwSg9rf6GA" async defer></script>
</head>

<body dir="auto">
	<div align="center">
        <div class="post">
            <img src="'.$url.'" alt="فال حافظ" class="img-post">
        </div>
    </div>
    <br><br>
    <div class="ftr-m">
        <a href="/" class="ftr link-in-text">دوباره فال بگیر</a>
    </div>
    <br>
    <div class="ftr-m">
        <a href="https://hspr.ir/services?utm_source=faal_service&utm_medium=footer_link&utm_campaign=services_page" class="ftr link-in-text">صفحه سرویس‌ها</a>
    </div>
</body>
</html>';

?>