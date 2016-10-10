@extends('page::page-layouts.admin-v2')

@section('content')
    <div class="container-fluid">

        <div class="boards">
            <div class="widget-heading text-uppercase"><i class="material material_info"></i> Error Logs</div>
            <hr>
            <div class="widget-body">
                <table id="logs" class="table table-hover">
                    <thead>
                    <tr>
                        <th>Error Message</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($logs as $log)
                        <tr>
                            <td> <p class="text-danger "> {!! $log['text'] !!}  </p> </td>
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
        $('#logs').DataTable( {

        } );
    } );
</script>
@endpush