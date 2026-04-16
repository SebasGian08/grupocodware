<header class="main-header header-style-three">
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">

                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo-principal.png') }}" alt="CODWARE">
                    </a>
                </div>

                <div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">

                    <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">

                                <li><a href="{{ route('home') }}">Inicio</a></li>

                                <li class="dropdown">
                                    <a href="{{ route('services.index') }}">Servicios</a>
                                    <ul>
                                        @foreach($servicesMenu as $service)
                                        <li>
                                            <a href="{{ route('services.show', $service->slug) }}">
                                                {{ $service->nombre }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li><a href="{{ route('mantenimiento') }}">Portafolio</a></li>
                                <li><a href="{{ route('contact.index') }}">Contacto</a></li>

                            </ul>
                        </div>
                    </nav>

                    <div class="outer-box d-flex align-items-center">

                        <ul class="header-social_box-two">
                            <li>
                                <a href="https://www.facebook.com/Codwareoficial" target="_blank"
                                    class="fa-brands fa-facebook-f"></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/grupocodware/" target="_blank"
                                    class="fa-brands fa-instagram"></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/grupo-codware" target="_blank"
                                    class="fa-brands fa-linkedin"></a>
                            </li>
                        </ul>

                        <div class="button-box" style="display:flex; gap:12px; flex-wrap:wrap;">
                            <a class="btn-cotizar" href="{{ route('admin.login') }}" target="_blank">
                                <i class="fa-solid fa-user"></i> Panel Clientes
                            </a>
                            <a class="btn-tienda" href="{{ route('mantenimiento') }}" target="_blank">
                                <i class="fa-solid fa-store"></i> Tienda virtual 
                            </a>
                        </div>

                        <div class="mobile-nav-toggler">
                            <span class="icon fa-solid fa-bars"></span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="sticky-header">
        <div class="auto-container">
            <div class="d-flex justify-content-between align-items-center">

                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo-principal.png') }}" alt="CODWARE">
                    </a>
                </div>

                <div class="right-box d-flex align-items-center flex-wrap">
                    <nav class="main-menu"></nav>

                    <div class="outer-box d-flex align-items-center">

                        <nav class="main-menu show navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">

                                    <li><a href="{{ route('home') }}">Inicio</a></li>

                                    <li class="dropdown">
                                        <a href="{{ route('services.index') }}">Servicios</a>
                                        <ul>
                                            @foreach($servicesMenu as $service)
                                            <li>
                                                <a href="{{ route('services.show', $service->slug) }}">
                                                    {{ $service->nombre }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <!-- <li class="dropdown">
                                        <a href="#">Soluciones</a>
                                        <ul>
                                            <li><a href="#">Sistema de citas médicas</a></li>
                                            <li><a href="#">Sistema de asistencia</a></li>
                                            <li>
                                                <a href="https://demo.erpgrupocodware.com/login" target="_blank">
                                                    Facturación Electrónica
                                                </a>
                                            </li>
                                            <li><a href="#">Sistema de reservas - Hotel</a></li>
                                        </ul>
                                    </li> -->

                                    <li><a href="{{ route('mantenimiento') }}">Portafolio</a></li>
                                    <li><a href="{{ route('contact.index') }}">Contacto</a></li>

                                </ul>
                            </div>
                        </nav>

                        <ul class="header-social_box-two">
                            <li><a href="#" class="fa-brands fa-facebook-f"></a></li>
                            <li><a href="#" class="fa-brands fa-instagram"></a></li>
                            <li><a href="#" class="fa-brands fa-linkedin"></a></li>
                        </ul>

                        <div class="button-box" style="display:flex; gap:12px; flex-wrap:wrap;">
                            <a class="btn-cotizar" href="{{ route('admin.login') }}" target="_blank">
                                <i class="fa-solid fa-user"></i> Panel Clientes
                            </a>
                            <a class="btn-tienda" href="{{ route('mantenimiento') }}" target="_blank">
                                <i class="fa-solid fa-store"></i> Tienda virtual
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>