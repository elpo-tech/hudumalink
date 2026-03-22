<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item sidebar-category">
            <p>HUDUMA LINK</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard')}}">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Dashboard</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/profile')}}">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Profile</span>

            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-pat" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-account-supervisor menu-icon"></i>
                <span class="menu-title">Patients</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-pat">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('/patient_details')}}">Patient Details</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Patient Records</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-hospital-building menu-icon"></i>
                <span class="menu-title">Hospitals</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-sitemap menu-icon"></i>
                <span class="menu-title">Services</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Insurances</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Admissions</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-file-check menu-icon"></i>
                <span class="menu-title">Pending Approvals</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#set" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-cogs menu-icon"></i>
                <span class="menu-title">Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="set">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#"> General Settings </a></li>
                    <li class="nav-item"> <a class="nav-link" href="#"> Permissions </a></li>
                    <li class="nav-item"> <a class="nav-link" href="#"> System Logs </a></li>

                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>

    </ul>
</nav>