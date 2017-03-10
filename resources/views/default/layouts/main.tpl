{config_load file="smarty_main.conf"}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
          content="Вас вітає фірма АРМАЗОН - український виробник дерев'яних фоторамок. На нашому сайті Ви можете купити рамки наступних розмірів: 10х15, 13х18, 15х21, 18х24, 21х30, 25х38, 30х40.">
    <meta name="keywords"
          content="фоторамки, рамки, продаж, фоторамок, фоторамки, фоторамочки, дерев'яні, woodframe, wood, frame">

    <meta name="author" content="Vlad">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{#imagesPath#}/favicon.jpg" type="image/png">

    <title>Фоторамки Armazon</title>

    <!-- CDN styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">


    <link rel="stylesheet" href="https://bootswatch.com/yeti/bootstrap.min.css">

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

<!-- HEADER -->
{include file="../partials/header.tpl"}

<!-- MENU -->
{include file="../partials/menu.tpl"}

<!-- MAIN CONTENT-->
<div class="container">
    {include file="../shop/{$templateFile}"}
</div>

<!-- FOOTER -->
{include file="../partials/footer.tpl"}

<!-- CDN scripts -->
<script
        src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<!-- App Scripts -->
{if isset($jsFile)}
    <script src="src/scripts/{$jsFile}"></script>
{/if}
</body>
</html>