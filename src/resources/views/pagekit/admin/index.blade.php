@extends('page::page-layouts.admin-v2')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">

        <div class="row section">

            <div class="col-md-3">
                @include('page::admin.shared.dash-info-widget',
                ['heading' => "Markdown Content", "content" => count($markdown).' Pages'])
            </div>

            <div class="col-md-3">
                @include('page::admin.shared.dash-info-widget',
                ['heading' => "Env Settings", "content" => count($env).' Variables'])
            </div>

            <div class="col-md-3">
                @include('page::admin.shared.dash-info-widget',
                ['heading' => "System Errors", "content" => $logs->count().' Reported'])
            </div>

            <div class="col-md-3">
                @include('page::admin.shared.dash-info-widget',
                ['heading' => "Laravel Version", "content" => 'Ver ' .App::VERSION() ])
            </div>

        </div>

        <div class="row section">
            <div class="col-md-12">
               @include('page::admin.shared.dashboard-logs')
            </div>
        </div>

    </div>
@endsection
