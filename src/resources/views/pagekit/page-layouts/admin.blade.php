@extends('page::page-layouts.default')

@section('page')
    <div id="wrapper" class="table sidebar-closed">
        <div class="table-row">
            <div class="table-cell">
                <div class="sidebar ">
                    <div class="">
                        <nav class="top-nav">
                            <ul class="list-unstyled">
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
                                @show
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="table-cell main-dashboard">
                <nav class="section">
                    <div class="menu-table">
                        <div class="menu-table-row">
                            <div class="logo menu-table-cell">
                                <h4 class="text-uppercase">
                                    {{--<i class="material material_explore"></i> --}}
                                    PageKit
                                    <small>Admin Starter</small>
                                </h4>
                            </div>
                            <div class="menu-table-cell text-right">
                                <i class="material material_notifications_none"></i>
                                <i class="material material_person_outline"></i>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="dash">
                    <div class="container-fluid">
                        <div class="main-content">
                            @yield('content')
                        </div>
                    </div>
                    @include('page::shared.admin-footer')
                </div>
            </div>


            @section('sidebar-right')
                <div class="table-cell sidebar-right">

                    <div class="container-fluid">

                        <div class="">
                            <h4 class="text-uppercase"><i class="material material_info_outline"></i></h4>
                            <p>PageKit admin starter is an easy to use bootstrap compatible admin dashboard created to
                                help you build better backends for your laravel applications. Please visit our
                                <a href="//github.com/shawnsandy/pagekit">Github page for setup instructions.</a></p>
                        </div>
                    </div>
                </div>
            @show
        </div>
    </div>
@endsection

@push('styles')
{{--<link rel='stylesheet' href='/vendor/typicons/typicons.min.css' />--}}
<link rel='stylesheet' href='/css/pagekit/admin.css'/>
<link href="/css/pagekit/fonts/material-icons/style.css" rel="stylesheet">
<link href="/css/pagekit/fonts/social/style.css" rel="stylesheet">
<style>

</style>
@endpush
@push('scripts')
<script type="text/javascript">
    $('#sidebar-toggle').click(function (e) {
        e.preventDefault();
        $(".sidebar-toogle").slideToggle('fast', 'linear');
        $('#wrapper').toggleClass('sidebar-closed');
    })
</script>
@endpush
