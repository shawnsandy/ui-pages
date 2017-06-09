<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description', 'Site description')">
    <meta name="author" content="Shawn Sandy">
    <!-- Latest compiled and minified CSS -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://unpkg.com/font-awesome@4.7.0/css/font-awesome.min.css">

    @if(App::environment() === "production")
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.min.css">
    @else
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css.map">
    @endif

    <style>
        p {
            font-size: 16px;
        }

        .form-control {
            border-radius: 0;
        }

        .hide {
            display: none;
        }

        .btn {
            border-radius: 20px;
        }

        footer {
            padding: 50px 0;
        }
    </style>
    @stack('styles')
    @stack('inline-styles')
</head>

<body>


<nav class="nav">
    <div class="nav-left">
        <div class="nav-item">
           <h3 class="title">@yield('page_title')</h3>
        </div>
    </div>
</nav>


<div class="container">

    <div class="columns">
        <div>
            @include('extras::partials.messages')
        </div>
    </div>
</div>
<hr>
@yield('content')
<footer class="columns">

    <div class="column has-text-centered">
        <hr>
        <p class="text-center">Powered By Laravel {{ app()->version() }} </p>
    </div>

</footer>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
@stack('scripts')
@stack('inline_scripts')
</html>
