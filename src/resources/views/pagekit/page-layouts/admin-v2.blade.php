@extends('page::page-layouts.default')
@section('body')
<body>
    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="{{ config('pagekit.sidebar-theme_style') }}">
            <ul class="sidebar-nav">
                @include('page::page-layouts.shared.sidebar-nav')
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div id="dashboard" class="container-fluid">
                <nav class="admin-nav">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell branding">
                                <h4 class="text-uppercase">
                                    {{ config('pagekit.page_title') }}
                                </h4>
                            </div>
                            <div class="tbl-cell profile text-right">
                                <small>
                                    {{ config('pagekit.company_name') }}
                                </small>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="dashboard-wrapper">
                    <div class="tbl">
                        <div class="dashboard col-md-9">
                            <main class=""> @yield('content')</main>
                        </div>
                        <div class="dashboard-sidebar col-md-3">
                            <div class="">
                                <div class="boards">
                                    <div class="widget-heading">
                                        <h3 class="text-uppercase"><i class="material material_info"></i></h3></div>
                                    <hr>
                                    <div class="widget-body">
                                        <p>PageKit admin starter is an easy to use bootstrap compatible admin
                                            dashboard
                                            created to
                                            help you build better backends for your laravel applications. Please
                                            visit our
                                            <a href="//github.com/shawnsandy/ui-pages" target="_blank">Github page for
                                                setup
                                                instructions.</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
</body>
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('/css/pagekit/admin-v2.css') }}">
@endpush
@push('scripts')
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $('.toggle-btn').toggleClass('closed');
    });
</script>
@endpush

