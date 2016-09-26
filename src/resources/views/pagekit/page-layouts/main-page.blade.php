@extends('page::page-layouts.default')

@section('page')

@section('navbar')

    @include('page::shared.nav')

@show

@section('header')

    @include('page::shared.header')

@show

<!-- main page content  -->
<main>
    {{ Breadcrumbs::breadcrumbs() }}
@yield('content')
</main>



 <!-- footer -->
 @section('footer')

     @include('page::shared.footer')

 @show

@endsection
