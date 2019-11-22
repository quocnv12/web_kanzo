<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanzo- @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <link rel="shortcut icon" type="images/logo_kazo.png" href="images/logo_kazo.png"/>
    <base href="{{asset('')}}">

    <!-- CSS libs -->
    <link rel="stylesheet" type="text/css" href="css/reset-browser.css">
    <link rel="stylesheet" type="text/css" href="libs/bootstrap-4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="libs/fontawesome-free-5.10.1-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="libs/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="libs/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="libs/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="libs/slick-1.8.1/slick/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="csss/home.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- CSS libs -->
    @yield('css')
    <!-- JS libs -->
    <script type="text/javascript" src="libs/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script type="text/javascript" src="libs/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5dd61eccd96992700fc87899/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();

</script>
<!--End of Tawk.to Script-->
<!-- JS libs slick -->
<script type="text/javascript" src="libs/slick-1.8.1/slick/slick.min.js"></script>
<!-- JS libs wow -->
<script src="js/wow.js"></script>
<script src="js/home.js"></script>
@yield('js')

</html>
