@extends('page::page-layouts.main-page')
@section('content')
    <div class="container borderless">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Login...
                </h2>
                @include('page::shared.login-form')
            </div>
            <div class="col-md-6">
                <h2>Register</h2>
                <p class="lead">
                    Some cool reasons for joining this website should go here...
                </p>
                <p>
                <ul>
                    <li>Benefits of Membership</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                </ul>
                    <a href="" class="btn btn-primary btn-lg btn-block">
                        Register Now
                    </a>
                </p>

            </div>
        </div>
    </div>

@endsection
