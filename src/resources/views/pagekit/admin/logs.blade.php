@extends('page::page-layouts.admin-v2')

@section('content')
    <div class="container-fluid">
    <h3>Error Logs</h3>
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
        </div>

    </div>
@endsection()
