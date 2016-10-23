<div class="boards">
    <div class="widget-heading text-uppercase"><i class="material material_error"></i> Error Logs</div>
    <div class="widget-body">
        <table class="table table-hover borderless datable">
            <tbody>
            @foreach ($logs->take(5) as $log)
                <tr>
                    <td><p class="text-danger text-capitalize"> {!! str_limit($log['text'], 180) !!} </p></td>
                    <td><p>{{ $log['date'] }}</p></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p class="">
            <a href="/dash/logs" class="btn btn-primary">View Logs</a>
        </p>
    </div>
</div>
