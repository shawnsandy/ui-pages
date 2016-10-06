@extends('page::page-layouts.admin-v2')

@section('content')
    <div class="container-fluid">

        <div class="dash-box">
            <h3 class="text-capitalize dash-box-heading"><i class="material material_info"></i> Error Logs</h3>
            <hr>
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
                        <td>
                            <p class="text-danger ">
                                {!! $log['text'] !!}
                            </p>
                        </td>
                        <td>
                            {{ $log['date'] }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection()
@push('styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
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
