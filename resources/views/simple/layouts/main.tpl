<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <!-- CDN styles -->

    <!-- App styles -->

</head>
<body>
<!-- HEADER -->
{include file="../partials/header.tpl"}

<!-- MENU -->
{include file="../partials/menu.tpl"}

<!-- MAIN CONTENT-->
{include file="../shop/{$templateFile}"}

<!-- FOOTER -->
{include file="../partials/footer.tpl"}

<!-- CDN scripts -->
<script
        src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous"></script>

<!-- App Scripts -->
{if isset($jsFile)}
    <script src="src/scripts/{$jsFile}"></script>
{/if}
</body>
</html>