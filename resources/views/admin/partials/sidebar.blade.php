<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <img src="{{ asset('assets/images/logo-principal-white.png') }}" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>

            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>

            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
    </div>

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-secondary">

                <!-- DASHBOARD -->
                <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- CONFIGURACIÓN -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Configuración</h4>
                </li>

                <li class="nav-item {{ Request::is('admin/usuarios*') ? 'active' : '' }}">
                    <a href="{{ route('admin.users.index') }}">
                        <i class="fas fa-users"></i>
                        <p>Usuarios</p>
                    </a>
                </li>

                <li class="nav-item {{ Request::is('admin/roles*') ? 'active' : '' }}">
                    <a href="{{ route('admin.roles.index') }}">
                        <i class="fas fa-user-shield"></i>
                        <p>Roles</p>
                    </a>
                </li>

                <!-- CONTENIDO -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fas fa-globe"></i>
                    </span>
                    <h4 class="text-section">Contenido Web</h4>
                </li>

                <!-- BLOG -->
                <li class="nav-item {{ Request::is('admin/blogs*') ? 'active' : '' }}">
                    <a href="{{ route('admin.blogs.index') }}">
                        <i class="fas fa-newspaper"></i>
                        <p>Blog</p>
                    </a>
                </li>

                <li class="nav-item {{ Request::is('admin/servicios*') ? 'active' : '' }}">
                    <a href="{{ route('admin.servicios.index') }}">
                        <i class="fas fa-cog"></i>
                        <p>Servicios</p>
                    </a>
                </li>

                <li class="nav-item {{ Request::is('admin/portafolios*') ? 'active' : '' }}">
                    <a href="{{ route('admin.portafolios.index') }}">
                        <i class="fas fa-briefcase"></i>
                        <p>Portafolio</p>
                    </a>
                </li>

                <li class="nav-item {{ Request::is('admin/contactos*') ? 'active' : '' }}">
                    <a href="{{ route('admin.contacts.index') }}">
                        <i class="fas fa-envelope"></i>
                        <p>Contactos</p>
                    </a>
                </li>

            </ul>

        </div>
    </div>
</div>