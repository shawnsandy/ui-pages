@extends('page::page-layouts.default')
@section('page')


<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li>
                <a href="#">
                                <span id="sidebar-toggle" class="">
                                <i class="fa material material_fullscreen sidebar-toogle" aria-hidden="true"></i>
                                <i class="fa material material_fullscreen_exit sidebar-toogle nav-toggle"
                                   aria-hidden="true"></i>
                                </span>
                </a>
            </li>
            @section('sidebar-links')
                <li>
                    <a href=""><i class="fa material material_dashboard" aria-hidden="true"></i>
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
                <a href=""><i class="fa material material_settings" aria-hidden="true"></i><span
                            class="nav-title">Settings</span>
                </a>
            </li>
            <li>
                <a href=""><i class="fa material material_arrow_upward"
                              aria-hidden="true"></i><span
                            class="nav-title">Top</span>
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
                    <div class="tbl-cell">
                        <a href="#" class="" id="menu-toggle">
                            Toggle
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    @yield('content')
                </div>
                <div class="col-lg-3">
                    Sidebar
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

@endpush