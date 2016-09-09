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
    <title>{{ config('pagekit.title', 'Page Title - PageKit.') }} </title>
    <link rel="stylesheet" href="/css/pagekit/app.css">
    <link rel="stylesheet" href="/css/pagekit/page.css">
    <link rel="stylesheet" href="/vendor/aos/aos.css" />
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css" />

     @if(config('pagekit.branding'))
    <style>

      body {
        background-color: {!! config('pagekit.brand.background_color') !!};
        color: {!! config('pagekit.brand.text_color')!!};
        font-family: {!! config('pagekit.brand.font_family' ) !!};
    }

    header {
        background-color: {!! config('pagekit.brand.header_background_color') !!};
        color: {{ config('pagekit.brand.header_font_color')}};

        @if(config('pagekit.brand.header_background_image'))
        background-image: url("{{ config('pagekit.brand.header_background_image') }}");
        background-repeat: no-repeat ;
        background-size: cover ;
        background-position: center center ;
        @endif

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

    @stack('styles')
</head>


<body>
@yield('page')
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="/vendor/aos/aos.js"></script>
<script>
    AOS.init();
</script>

@stack('scripts')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '{{ config('pagekit.ga_tracker') }}', 'auto');
  ga('send', 'pageview');

</script>
</html>
