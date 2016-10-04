@extends('page::page-layouts.admin-v2')

@section('content')
    <div class="container-fluid">
        <div class="row section">
            <div class="col-md-12">
               @include('page::admin.shared.dashboard-logs')
            </div>
        </div>
    </div>
@endsection
