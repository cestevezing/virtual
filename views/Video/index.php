<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>34 Congreso Fendipetroleo</title>
    <link rel="shortcut icon" href="https://congresofendipetroleo.com/congreso2019/img/Fevicon.png">
</head>

<body>
    <div>
        <svg version="1.1" style="position:fixed;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1770 930" preserveAspectRatio="xMinYMin meet">
            <g>
                <foreignObject x="0" y="0" width="1770" height="930">
                    <iframe width="1770" height="930" src="https://www.youtube.com/embed/dP34bWy7Gfs?loop=1&autoplay=1&disablekb=1&fs=0&playsinline=1&mute=1" frameborder="0" allow='autoplay' allowfullscreen>
                    </iframe>
                </foreignObject>
            </g>
        </svg>
        <?php require "views/Footer/footer.php"; ?>
        <script>
            function redir() {
                var url = "<?php echo constant('URL'); ?>Panorama";
                window.location.href = url;
            }
            setTimeout(redir, 68000);
        </script>
    </div>
</body>

</html>