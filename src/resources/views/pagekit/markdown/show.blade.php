@extends('page::page-layouts.main-page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <article class="markdown">
                    {!! $markdown !!}
                </article>
            </div>
        </div>
    </div>
@endsection
