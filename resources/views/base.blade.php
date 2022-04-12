<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- Metatags -->
        <meta charset=utf-8>
        <meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta name=description content="Tag">
        <meta name=keywords content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, start-up, parallax, masonry">
        <meta name=author content="uichamp.com">
        <title>Tag</title>

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
        <link rel="shortcut icon" href="images/favicons/favicon.ico" type="image/x-icon" />
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/images/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="/fonts/favland.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link href="/css/theme.min.css" rel=stylesheet>
    </head>

    <body>

        <div class="main-content">
            @include($lang.'.include.header')

            @yield('content')
        </div>
        @include($lang.'.include.footer')

        <script src="/js/jquery/jquery-3.5.1.min.js"></script>
        <script src="/js/popper/popper.min.js"></script>
        <script src="/js/bootstrap/bootstrap.min.js"></script>
        <script src="/js/aos/aos.js"></script>
        <script src="/js/wave-effect/waves.min.js"></script>
        <script src="/js/parallax/simpleParallax.min.js"></script>
        <script src="/js/swiper/swiper.min.js"></script>
        <script src="/js/swiper/swiper.init.js"></script>
        <script src="/js/shuffle/shuffle.min.js"></script>
        <script src="/js/countup/countUp.js"></script>
        <script src="/js/theme.js"></script>
    </body>

</html>
