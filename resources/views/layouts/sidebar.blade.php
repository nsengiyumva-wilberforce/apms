<style>
.active a, a:hover{
    background-color: green !important;
}
</style>
<nav class="sidebar sidebar-offcanvas navbar-dark bg-success mt-5 position-relative" id="sidebar">
<img src="{{ asset('dash/APMS_logo.png' ) }}" alt="APMS_logo" class="img-thumbnail dash_logo">
    <ul class="nav flex-column mb-auto">
        <li class="nav-item mb-3">
            <a class="nav-link" href="/admin/dashboard">
                <i class="mdi mdi-view-dashboard menu-icon text-light"></i>
                <span class="menu-title text-light fs-5">Dashboard</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link" href="/admin/temperature">
                <i class="mdi mdi-temperature-celsius menu-icon text-light"></i>
                <span class="menu-title text-light fs-5">Temperature</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link" href="/admin/audio">
                <i class="mdi mdi-audio-video menu-icon text-light"></i>
                <span class="menu-title text-light fs-5">Audio</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link" href="/admin/feed">
                <i class="mdi mdi-food-apple menu-icon text-light"></i>
                <span class="menu-title text-light fs-5">Feed</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link" href="/admin/water">
                <i class="mdi mdi-water menu-icon text-light"></i>
                <span class="menu-title text-light fs-5">Water</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link" href="/admin/security">
                <i class="mdi mdi-camera menu-icon text-light"></i>
                <span class="menu-title text-light fs-5">Security</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link" href="/admin/sensor">
                <i class="mdi mdi-motion-sensor menu-icon text-light"></i>
                <span class="menu-title text-light fs-5">Sensors</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link" href="/admin/system">
                <i class="mdi mdi-blender-software menu-icon text-light"></i>
                <span class="menu-title text-light fs-5">System</span>
            </a>
        </li>
        <li class="nav-item mb-3">
            <a class="nav-link" href="/admin/user">
                <i class="mdi mdi-account menu-icon text-light"></i>
                <span class="menu-title text-light fs-5">Users</span>
            </a>
        </li>
    </ul>
</nav>
