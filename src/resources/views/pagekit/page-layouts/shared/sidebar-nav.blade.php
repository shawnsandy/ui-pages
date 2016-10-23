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
        <a href="/dash/logs"><i class="fa material material_error" aria-hidden="true"></i><span
                    class="nav-title">Logs</span></a>
    </li>
@show
<li>
    <a href="/enveditor"><i class="fa material material_settings" aria-hidden="true"></i><span
                class="nav-title">Settings</span>
    </a>
</li>
<li>
    <a href=""><i class="fa material material_arrow_upward" aria-hidden="true"></i><span class="nav-title">Top</span>
    </a>
</li>
