@extends('page::page-layouts.main-page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Lost your password. Reset it here</h2>
                <hr>
                @include('page::shared.password-reset')
            </div>
        </div>
    </div>

@endsection
