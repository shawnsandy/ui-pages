@extends('page::page-layouts.main-page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <article class="markdown">
                    {!! $markdown['title'] !!}
                    <p class="meta"><small><em>Posted : {{ $markdown['time_ago'] }}</em></small></p>
                    {!! $markdown['content'] !!}
                </article>
            </div>
            <div class="col-md-3">
                <div class="panel">
                    <div class="panel-body">
                        <h3>Recent News</h3>
                        <hr>
                        @each('page::markdown.markdown-links', collect(MKD::markdownPosts()),
                        'links', 'page::shared.no-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
