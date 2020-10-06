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
        <meta property="og:image"              content="http://www.alfaridere.com.br/assets/img/banner/garota_sorrindo_alfa-ridere.jpg" />
        <title>Alfa Ridere</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
        <link href="/assets/sites/fonts/Coolvetica/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/site/js/vendor/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="/assets/site/css/foundation.css">
        <link rel="stylesheet" href="/assets/site/css/app.css">
    </head>
    <body>
        @include('site.layouts.includes.header')
        
        @yield('content')

        @include('site.layouts.includes.footer')

        <script src="/assets/site/js/vendor/jquery.js"></script>
        <script src="/assets/site/js/vendor/what-input.js"></script>
        <script src="/assets/site/js/vendor/foundation.js"></script>

        <!-- magnific-popup -->
        <script src="/assets/site/js/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

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

        <!-- JqueryValidate -->
        <script src="/assets/site/js/vendor/validation/jquery.validate.min.js"></script>
        <script src="/assets/site/js/vendor/mask/jquery.mask.min.js"></script>

        <!-- toastr -->
        <link rel="stylesheet" href="/assets/site/js/vendor/toastr/toastr.min.css">
        <script src="/assets/site/js/vendor/toastr/toastr.min.js"></script>


        <script src="/assets/site/js/app.js"></script>
        <script src="/assets/site/js/pre-agendamento/register.js"></script>
        <script>
            $(document).ready(function(){
                $cardEffect = document.querySelectorAll('.card--effect');
                var sceneInstance = [];
                for (var i = 0; i < $cardEffect.length; i++) {
                    sceneInstance[i] =  new Parallax($cardEffect[i]);
                }
            })
        </script>
    </body>
</html>
