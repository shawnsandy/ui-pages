@extends('page::page-layouts.admin-v2')
@section('title', 'Dashboard')
@section('content')

    <div class="container-fluid">

        <h3 class="text-capitalize">
            Dashboard
        </h3>

        <section class="section">
            <div class="widgets">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="box tbl">
                                    <div class="tbl-cell text-center">
                                        <div class="panel-heading text-uppercase">
                                            <i class="social social-reg social-twitter-with-circle"></i>
                                        </div>
                                        <div class="panel-body">
                                            <p>Tweets 22: Followers 999:</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="row section">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="tbl">
                        <div class="tbl-cell col-md-9">
                            Main
                        </div>
                        <div class="tbl-cell col-md-3">
                            Side
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-panel">
                    <div class="dashboard-panel-heading">
                        <i class="material material_photo"></i> Gallery
                    </div>
                    <div class="row">
                        <div class="team-images">
                            <img src="http://placehold.it/140x140" class="">
                            <img src="http://placehold.it/140x140" class="">
                            <img src="http://placehold.it/140x140" class="">
                            <img src="http://placehold.it/140x140" class="">
                            <img src="http://placehold.it/140x140" class="">
                            <img src="http://placehold.it/140x140" class="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('styles')
<style>

</style>
@endpush
@push('scripts')

@endpush
