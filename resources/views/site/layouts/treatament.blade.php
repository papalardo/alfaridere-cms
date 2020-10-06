<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Centro odontológico completo em Águas Claras, com dentistas de diferentes especialidades e tratamentos focados na saúde e estética bucal para adultos e crianças.">
        <meta name="keywords" contennt="dentista, Águas Claras, procedimento, dentário, aparelho, ortodontia, odontológico, Alfa Ridere, infantil, limpeza, bucal, estética, sorriso, preço, valor, melhor dentista, referência, indicações.">
        <meta name="author" content="Alfa Ridere">
        <meta name="theme-color" content="#5CADE3">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta property="og:url"                content="http://www.alfaridere.com.br" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="Alfa Ridere" />
        <meta property="og:description"        content="Centro odontológico completo em Águas Claras, com dentistas de diferentes especialidades e tratamentos focados na saúde e estética bucal para adultos e crianças." />
        <meta property="og:image"              content="http://www.alfaridere.com.br/images/banner/banner-01.jpg" />
        <title>Alfa Ridere | Tratamentos </title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
        <link href="/assets/site/fonts/Coolvetica/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/site/css/foundation.css">
        <link rel="stylesheet" href="/assets/site/css/app.css">
    </head>
    <body class="{{ $body_class ?? '' }}">

        @include('site.layouts.includes.header')
        
        @yield('content')

        @include('site.layouts.includes.footer')

        <script src="/assets/site/js/vendor/jquery.js"></script>
        <script src="/assets/site/js/vendor/what-input.js"></script>
        <script src="/assets/site/js/vendor/foundation.js"></script>

        <!-- flickity -->
        <script src="/assets/site/js/vendor/flickity/flickity.pkgd.min.js"></script>
        <link rel="stylesheet" href="/assets/site/js/vendor/flickity/flickity.css">

        <!-- TweenMax -->
        <script src="/assets/site/js/vendor/greensock/src/minified/TweenMax.min.js"></script>
        <script src="/assets/site/js/vendor/greensock/src/minified/plugins/ScrollToPlugin.min.js"></script>
        <script src="/assets/site/js/vendor/greensock/src/minified/plugins/DrawSVGPlugin.min.js"></script>

        <script src="https://unpkg.com/flickity-fade@1.0.0/flickity-fade.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/flickity-fade@1.0.0/flickity-fade.css">

        <script src="/assets/site/js/vendor/parallax/parallax.min.js"></script>
        <script src="/assets/site/js/vendor/fullpage/fullpage.min.js"></script>
        <link rel="stylesheet" href="/assets/site/js/vendor/fullpage/fullpage.min.css">
        <link rel="stylesheet" href="/assets/site/js/vendor/fullpage/custom-nav.css">
        <script src="/assets/site/js/app.js"></script>
        <script src="/assets/site/js/fullpage-slide.js"></script>
        <script src="/assets/site/js/modal.js"></script>
    </body>
</html>
