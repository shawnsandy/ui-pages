@extends($dashTheme.'page-layouts.default')

@section('body')

@section('header')
    @include($dashTheme.'shared.header')
@show

<!-- main page content  -->
<main>
    @yield('content')
</main>

<!-- footer -->
@section('footer')
    @include($dashTheme.'shared.footer')
@show

@endsection
