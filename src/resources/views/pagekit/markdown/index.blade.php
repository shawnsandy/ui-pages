@extends('page::page-layouts.main-page')
@section('title', 'News and Articles')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @each('page::markdown.markdown-posts', collect(MKD::markdownPosts())
                ->sortByDesc('last_modified'), 'post')
            </div>
        </div>
    </div>
@endsection

