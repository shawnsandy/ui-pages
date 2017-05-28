@extends($pageTheme.'page-layouts.default')

@section('body')

@section('header')
    @include($pageTheme.'shared.header')
@show

<!-- main page content  -->
<main>
    @yield('content')
</main>

<!-- footer -->
@section('footer')
    @include($pageTheme.'shared.footer')
@show

@endsection
