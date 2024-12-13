<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
<div class="app-container" style="background-image: url('<?= html($backgrounds) ?>')">
    <div class="top-bar">
        <div class="top-bar-location">
            <!-- Start SVG Location Icon   -->
            <svg viewBox="0 0 52.7624 72.774" class="icon">
                <path d="m45.0353,7.7268h0c-10.3024-10.3024-27.0058-10.3024-37.3081,0h0C-1.2832,16.7371-2.5652,30.9001,4.6807,41.3819l21.7006,31.392,21.7006-31.392c7.2459-10.4818,5.9638-24.6448-3.0465-33.6551Zm-18.6541,32.3037c-7.5383,0-13.6492-6.111-13.6492-13.6492s6.111-13.6493,13.6492-13.6493,13.6492,6.111,13.6492,13.6493-6.111,13.6492-13.6492,13.6492Z"
                      style="fill: currentColor;"/>
            </svg>
            <!-- End SVG Location Icon   -->
            <?= html(ucfirst($info->city)) ?>
        </div>
        <div class="top-bar-date">
            <?= date('l, d') ?><sup>th</sup>
        </div>
    </div>
    <div class="weather-info">
        <img class="weather-info-img" src="<?= html($largeImage) ?>" alt="<?= $info->weatherType ?>">
        <h1 class="weather-info-temperature"><?= html($info->getCelsius()) ?><sup><sup>o</sup>C</sup>
        </h1>
        <p class="weather-info-desc">
            <!--  Start Icon  -->
            <!--            <svg class="icon" viewBox="0 0 64.835 62.9863">-->
            <!--                <path d="m38.7952,39.7744h12.9254c6.4144,0,11.6143-5.1999,11.6143-11.6143,0-3.9883-2.011-7.506-5.0735-9.5972-1.6542-5.8803-7.0526-10.1928-13.4618-10.1928-1.572,0-3.0816.2632-4.492.7414-2.5321-4.5396-7.3796-7.6115-12.9467-7.6115-8.1835,0-14.8174,6.634-14.8174,14.8174,0,.0814.0049.1616.0062.2427-6.1521.2946-11.0497,5.375-11.0497,11.6,0,6.4144,5.1999,11.6143,11.6142,11.6143h5.9995"-->
            <!--                      style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 3px;"/>-->
            <!--                <polygon-->
            <!--                    points="31.496 32.023 37.4737 15.8957 27.2263 15.8957 19.1137 39.7765 30.0016 39.7765 24.5577 61.4863 43.8782 32.023 31.496 32.023"-->
            <!--                    style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 3px;"/>-->
            <!--            </svg>-->
            <img class="icon" src="img/icons/<?= html($info->weatherType) . '.svg' ?>" alt="">
            <!--  End Icon  -->
            <?= $info->weatherType ?>
        </p>
    </div>
</div>

</body>
</html>