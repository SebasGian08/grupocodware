<header class="main-header header-style-three">
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">

                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo-2.webp') }}" alt="CODWARE">
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
                                    <a href="#">Servicios</a>
                                    <ul>
                                        <li><a href="#">Página Web</a></li>
                                        <li><a href="#">Tienda Virtual</a></li>
                                        <li><a href="#">Community Management</a></li>
                                        <li><a href="#">Aula Virtual</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
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
                                </li>

                                <li><a href="#">Portafolio</a></li>
                                <li><a href="#">Contacto</a></li>

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

                        <div class="button-box">
                            <a class="btn-style-four theme-btn btn-item" href="#">
                                <div class="btn-wrap">
                                    <span class="text-one">
                                        Nuestra tienda virtual <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                    <span class="text-two">
                                        Nuestra tienda virtual <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
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

    {{-- STICKY HEADER --}}
    <div class="sticky-header">
        <div class="auto-container">
            <div class="d-flex justify-content-between align-items-center">

                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.webp') }}" alt="CODWARE">
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
                                        <a href="#">Servicios</a>
                                        <ul>
                                            <li><a href="#">Página Web</a></li>
                                            <li><a href="#">Tienda Virtual</a></li>
                                            <li><a href="#">Community Management</a></li>
                                            <li><a href="#">Aula Virtual</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
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
                                    </li>

                                    <li><a href="#">Portafolio</a></li>
                                    <li><a href="#">Contacto</a></li>

                                </ul>
                            </div>
                        </nav>

                        <ul class="header-social_box-two">
                            <li><a href="#" class="fa-brands fa-facebook-f"></a></li>
                            <li><a href="#" class="fa-brands fa-instagram"></a></li>
                            <li><a href="#" class="fa-brands fa-linkedin"></a></li>
                        </ul>

                        <div class="button-box">
                            <a class="btn-style-four theme-btn btn-item" href="#">
                                <div class="btn-wrap">
                                    <span class="text-one">Nuestra tienda virtual <i
                                            class="fa-solid fa-arrow-right"></i></span>
                                    <span class="text-two">Nuestra tienda virtual <i
                                            class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</header>