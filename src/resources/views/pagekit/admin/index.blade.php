@extends('page::page-layouts.admin-v2')

@section('content')
    <div class="container-fluid">
        <div class="row section">
            <div class="col-md-3">
                @include('page::admin.shared.dash-info-widget')
            </div>
            <div class="col-md-3">
                @include('page::admin.shared.dash-info-widget')
            </div>
            <div class="col-md-3">
                @include('page::admin.shared.dash-info-widget')
            </div>
            <div class="col-md-3">
                @include('page::admin.shared.dash-info-widget', ['content' => " System Errors", "icon" => "info", "info" => $logs->count()])
            </div>
        </div>

        <div class="row section">
            <div class="col-md-12">
               @include('page::admin.shared.dashboard-logs')
            </div>
        </div>
    </div>
@endsection
