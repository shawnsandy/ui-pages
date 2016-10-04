@extends('page::page-layouts.admin-v2')

@section('content')
    <div class="container-fluid">
        <div class="row section">
            <div class="col-md-12">
                <h3>
                    Error Logs <small>( last five errors )</small>
                </h3>
                <div class="dash-box">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Error Message</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($logs as $log)
                            <tr>
                                <td>
                                    {{ $log['date'] }}
                                </td>
                                <td>
                                    <code>
                                        {!! $log['text'] !!}
                                    </code>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <p class="text-right">
                        <a href="/dash/logs" class="btn btn-danger">View Error Logs</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
