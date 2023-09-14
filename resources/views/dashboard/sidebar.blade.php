<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">EMS Admin </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="{{Route::is('dashboard') ? 'nav-item active': 'nav-item'}}">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item -Departments -->
    <li class="{{Route::is('department') ? 'nav-item active': 'nav-item'}}">
        <a class="nav-link" href="{{route('department')}}">
            <i class="fa fa-cubes"></i>
            <span>Departments</span></a>
    </li>


    <!-- Nav Item - Calender -->

    <li class="{{Route::is('calender') ? 'nav-item active': 'nav-item'}}">
        <a class="nav-link" href="{{route('calender')}}">
            <i class="fa fa-calendar"></i>
            <span>Calender</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Attendence & Leave-->
    <li class="{{Route::is('attendence') ? 'nav-item active': 'nav-item'}}">
        <a class="nav-link" href="{{route('attendence')}}">
            <i class="fa fa-check-square"></i>
            <span>Attendence</span></a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="leave.php">
            <i class="fa fa-calendar-times"></i>
            <span>Leaves</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    {{-- <!-- Nav Item - Salary -->
    <li class="nav-item">
        <a class="nav-link" href="salary.php">
            <i class="fa fa-money"></i>
            <span>Salary</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
