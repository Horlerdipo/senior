<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/images/logo.jpg">
    <!-- Page Title  -->
    <title>Senior Citizen Web Based Profiling System | Osun State Uiversity</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=1.8.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=1.8.0">
</head>

<body class="nk-body npc-invest bg-lighter ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        @include("partials.header")



        @yield('content')
        @include("partials.footer")

    </div>
    <!-- wrap @e -->
</div>
<!-- main @e -->
</div>
<!-- app-root @e -->

<script src="./assets/js/bundle.js"></script>
<script src="./assets/js/scripts.js"></script>
<script src="./assets/js/charts/gd-invest.js"></script>
</body>

</html>
