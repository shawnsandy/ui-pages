@extends('page::page-layouts.admin-v2')

@section('content')
    <div class="container-fluid">
        <div class="row section">
            <div class="col-md-3 text-center">
                @include('page::admin.shared.dash-info-widget')
            </div>
            <div class="col-md-3 text-center">
                @include('page::admin.shared.dash-info-widget')
            </div>
            <div class="col-md-3 text-center">
                @include('page::admin.shared.dash-info-widget')
            </div>
            <div class="col-md-3 text-center">
                @include('page::admin.shared.dash-info-widget', ['content' => $logs->count()." System Errors", "icon" => "info"])
            </div>
        </div>

        <div class="row section">
            <div class="col-md-12">
               @include('page::admin.shared.dashboard-logs')
            </div>
        </div>
    </div>
@endsection
