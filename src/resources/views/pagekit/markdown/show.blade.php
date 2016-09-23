@extends('page::page-layouts.main-page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <article>
                    {!! $markdown !!}
                </article>
            </div>
        </div>
    </div>
@endsection