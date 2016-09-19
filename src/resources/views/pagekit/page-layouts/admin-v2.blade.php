@extends('page::page-layouts.default')
@section('page')

    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="#" class="" id="menu-toggle">
                        <i class="material material_menu toggle-btn"></i>
                        <i class="material material_close toggle-btn closed"></i>
                    </a>
                </li>
                @section('sidebar-links')
                    <li>
                        <a href="/dash">
                            <i class="fa material material_apps" aria-hidden="true"></i>
                            <span class="nav-title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href=""><i class="fa material material_assignment" aria-hidden="true"></i>
                            <span class="nav-title">Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa material material_people" aria-hidden="true"></i><span
                                    class="nav-title">Users</span></a>
                    </li>
                @show
                <li>
                    <a href="/dash/config"><i class="fa material material_settings" aria-hidden="true"></i><span
                                class="nav-title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href=""><i class="fa material material_arrow_upward" aria-hidden="true"></i><span class="nav-title">Top</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="admin-nav">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell branding">
                            <h4 class="text-uppercase">

                                PageKit
                                <small>Admin Starter</small>
                            </h4>
                        </div>
                        <div class="tbl-cell profile text-right">
                            <p>
                                Shawn Sandy
                            </p>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="dashboard-wrapper">
                <div class="tbl">
                    <div class="tbl-cell tbl-top dashboard">
                        <div class=""> @yield('content')</div>
                    </div>
                    <div class="tbl-cell tbl-top dashboard-sidebar">
                        <div class="">
                            <h3 class="text-uppercase"><i class="material material_info_outline"></i></h3>
                            <p>PageKit admin starter is an easy to use bootstrap compatible admin dashboard created to
                                help you build better backends for your laravel applications. Please visit our
                                <a href="//github.com/shawnsandy/pagekit">Github page for setup instructions.</a></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /#page-content-wrapper -->
    </div>
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

