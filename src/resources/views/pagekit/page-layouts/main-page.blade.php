@extends('page::page-layouts.default')

@section('body')

@section('header')
    @include('page::shared.header')
@show

<!-- main page content  -->
<main>
    @yield('content')
</main>

<!-- footer -->
@section('footer')
    @include('page::shared.footer')
@show

@endsection
