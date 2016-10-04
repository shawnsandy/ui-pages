
<div class="dash-box">
    <h3 class="dash-box-heading">
        Error Logs <small>( last five errors )</small>
    </h3>
    <table class="table table-hover">
        <thead>
        <tr>
            <th></th>
            <th>Error Message</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($logs as $log)
            <tr>
                <td>

                </td>

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
    <p class="text-right">
        <a href="/dash/logs" class="btn btn-primary">View Error Logs</a>
    </p>
</div>
