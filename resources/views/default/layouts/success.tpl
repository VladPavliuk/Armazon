{config_load file="smarty_main.conf"}
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">

    <link rel="icon" href="../../favicon.ico">

    <title>Фоторамки Armazon</title>

    <!-- CDN styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <link rel="stylesheet" href="https://bootswatch.com/readable/bootstrap.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">

    <!-- App styles -->
    <link rel="stylesheet" href="{#stylesPath#}header.css">
    {if isset($styles)}
        {foreach from=$styles item=style}
            <link rel="stylesheet" href="{#stylesPath#}{$style}">
        {/foreach}
    {/if}
    <link rel="stylesheet" href="{#stylesPath#}footer.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="page-header">
            <h1> <img src="{#imagesPath#}/Smiley.png" title="Smiley" alt="Smiley" width="75">
                <span>Дякуємо за замовлення!</span>
            </h1>
        </div>
        <p class="lead"><a href="/">Повернутися до головної?</a></p>
       
    </div>
</div>

<!-- CDN scripts -->
<script
        src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous"></script>
<script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<!-- App Scripts -->
{if isset($jsFile)}
    <script src="src/scripts/{$jsFile}"></script>
{/if}
</body>
</html>