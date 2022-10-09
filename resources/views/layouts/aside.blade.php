<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href=>
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="bi bi-person-bounding-box"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                <i class="bi bi-person-circle"></i>
                    <span>usuarios</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                <i class="bi bi-safe2-fill"></i>
                    <span>Configuracion</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">


            <li class="nav-item">
                <a class="nav-link" href="{{ route('servicioIndex') }}">
                <i class="bi bi-person-rolodex"></i>
                    <span>Servicios</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                <i class="bi bi-people"></i>
                    <span>Cliente</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                <i class="bi bi-calendar-week"></i>
                    <span>Agenda</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            
            <li class="nav-item">
                <a class="nav-link" href="">
                <i class="bi bi-file-earmark-text"></i>
                    <span>Historias clinicas</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            
            <li class="nav-item">
                <a class="nav-link" href="">
                <i class="bi bi-bell"></i>
                    <span>Citas</span></a>
            </li>
            
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="">
                <i class="bi bi-clipboard-plus"></i>
                    <span>Ayudas</span></a>
            </li>
           
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
         
        </ul>
