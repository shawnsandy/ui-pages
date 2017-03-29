<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title> @yield('title', config('pagekit.title', 'Page Title - PageKit.')) </title>

    @stack('beforeStyles')
    <link rel="stylesheet" href="/css/pagekit/app.css">
    <link rel="stylesheet" href="/css/pagekit/page.css">
    <link rel="stylesheet" href="/assets/aos/dist/aos.css"/>
    <link href="/css/pagekit/fonts/material-icons/style.css" rel="stylesheet">
    <link href="/css/pagekit/fonts/social/style.css" rel="stylesheet">

    @stack('styles')

    @if(config('pagekit.branding'))
        <style>

            body {
                background-color: {!! config('pagekit.brand.background_color') !!};
                color: {!! config('pagekit.brand.text_color')!!};
                font-family: {!! config('pagekit.brand.font_family' ) !!};
            }

            header {


            }

            header h1 {
                color: {!! config('pagekit.brand.header_font_color') !!};
                font-size: {!! config('pagekit.brand.font_size') !!};
            }

            footer {
                background-color: {!! config('pagekit.brand.footer_background_color') !!};
                color: {!! config('pagekit.brand.footer_color') !!};
            }

        </style>
    @endif

</head>


@yield('body')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="/assets/aos/dist/aos.js"></script>

@stack('scripts')


<script>
    AOS.init();
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', '{{ config('pagekit.ga_tracker') }}', 'auto');
    ga('send', 'pageview');

</script>
</html>
