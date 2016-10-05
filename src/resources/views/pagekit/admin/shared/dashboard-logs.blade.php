<div class="dash-box">
    <h4 class="dash-box-heading text-uppercase">
        Error Logs
        <small>( last five errors )</small>
    </h4>
    <table class="table table-hover">
        <tbody>
        @foreach ($logs->take(5) as $log)
            <tr>
                <td>
                    <p class="text-danger"> {!! $log['text'] !!} </p>
                </td>
                <td>
                    {{ $log['date'] }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p class="">
        <a href="/dash/logs" class="btn btn-primary">View Logs</a>
    </p>
</div>
