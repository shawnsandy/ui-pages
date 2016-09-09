@extends('page::page-layouts.default')
@section('page')
    <div class="table">
        <div class="table-row">
            <div class="table-cell sidebar">sidebar</div>
            <div class="table-cell dashboard">Main</div>
            <div class="table-cell sidebar-right">secondary-sidebar</div>
        </div>
    </div>
@endsection
@push('styles')
<style>
    .table {
        display: table;
        height: 100%;
        width: 100%;
        border: 3px #000 solid;
    }

    .table-row {
        display: table-row;
        height: inherit;
        border: 3px red solut;
    }

    .table-cell {
        display: table-cell;

    }

    .sidebar {
        min-width: 100px;
    }

    .dashboard {
        min-width: 100%;
    }

    .sidebar-right {
        min-width: 300px;
    }
</style>
@endpush
@push('scripts')

@endpush
