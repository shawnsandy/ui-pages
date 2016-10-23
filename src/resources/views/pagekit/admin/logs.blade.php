@extends('page::page-layouts.admin-v2')
@section('title', 'Error logs')
@section('content')
    <div class="container-fluid">

        <div class="boards">
            <div class="widget-heading text-uppercase"><i class="material material_info"></i> Error Logs</div>
            <hr>
            <div class="widget-body">
                <table id="logs" class="table table-hover borderless datatable" data-order='[[1, "desc" ]]' >
                    <thead>
                    <tr>
                        <th>Error Message</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($logs as $log)
                        <tr class="">
                            <td> <p class="text-danger text-capitalize"> {!! str_limit($log['text'], 200) !!}  </p> </td>
                            <td class="date"><p>{{ $log['date'] }}</p></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection()
@push('styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<style>
    td.date {
        min-width: 200px;
    }
</style>
@endpush
@push('scripts')
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('.datatable').DataTable( {

        } );
    } );
</script>
@endpush
