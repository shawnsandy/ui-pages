<div class="dashboards">
    <div class="widget-heading"><i class="material material_error_outline"></i> Error Logs </div>
    <div class="widget-body">
        <table class="table table-hover">
            <tbody>
            @foreach ($logs->take(5) as $log)
                <tr>
                    <td> <p class="text-danger"> {!! $log['text'] !!} </p></td>
                    <td> <p>{{ $log['date'] }}</p> </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p class="">
            <a href="/dash/logs" class="btn btn-primary">View Logs</a>
        </p>
    </div>
</div>
