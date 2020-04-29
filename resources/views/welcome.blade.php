<?php
if( isset($_COOKIE['CookieHinweis']) ) {
    $showPopup = false;
} else {
    $showPopup = true;
}
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/app.css">

        <script type="text/javascript" src="js/cookiecheck.js"></script>

    </head>
    <body>
    <?php include ('../resources/views/cookie.php'); ?>

    <div class="container" style="height:auto;width:100%;">

        <div class="row flex-column" style="top:20px;position:absolute;">
            <h1>Abalo</h1>
            <h5>Deine Plattform um gebrauchte Produkte zu kaufen und verkaufen.</h5>
        </div>
        <div class="row" style="top:50%;position:absolute;">
            <h5>Abalo ist eine Plattform bei der Sie ihre gebrauchten Produkte verkaufen können. Alternativ können Sie gebrauchte Produkte kaufen</h5>

        </div>
        <div class="row" style="bottom:10px;position:absolute;">
            Copyright by Toni Kevo, Mona Eden
        </div>
    </div>

    </body>
</html>
