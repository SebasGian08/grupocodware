<!-- Footer -->
<footer class="main-footer"
    style="background-image:url({{ asset('assets/images/background/pattern-11.webp') }});background-color: rgb(5 30 38);">
    <div class="auto-container">

        <div class="widgets-section">
            <div class="row clearfix">

                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('assets/images/logo-principal-white.png') }}"
                                            alt="CODWARE" />
                                    </a>
                                </div>

                                <div class="text" style="text-align: justify;">
                                    Soluciones tecnológicas, desarrollo web y marketing digital para posicionar tu
                                    negocio y atraer más clientes.
                                </div>
                            </div>
                        </div>

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <h4>Boletín Informativo</h4>

                                <div class="text">
                                    Suscríbete para recibir nuestras novedades
                                </div>

                                <div class="email-box">
                                    <form method="POST" action="{{ route('subscribe.store') }}">
                                        @csrf

                                        <!-- honeypot -->
                                        <input type="text" name="website" style="display:none">

                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="correo@ejemplo.com" required>

                                            <button type="submit">
                                                <span class="fa-solid fa-paper-plane"></span>
                                            </button>
                                        </div>

                                        <!-- reCAPTCHA centrado -->
                                        <div class="recaptcha-wrapper">
                                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <ul class="social-box">
                                    <li><a href="https://www.facebook.com/Codwareoficial" target="_blank"
                                            class="fa-brands fa-facebook-f"></a></li>
                                    <li><a href="https://www.linkedin.com/company/grupo-codware" target="_blank"
                                            class="fa-brands fa-linkedin"></a></li>
                                    <li><a href="https://www.instagram.com/grupocodware/" target="_blank"
                                            class="fa-brands fa-instagram"></a></li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="footer-widget links-widget col-lg-6 col-md-6 col-sm-12">

                            <h4>Servicios</h4>

                            <ul class="list-link">
                                @foreach($servicesMenu as $service)
                                <li>
                                    <a href="{{ route('services.show', $service->slug) }}">
                                        <i class="fas fa-angle-right"></i> {{ $service->nombre }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h4>Información</h4>

                                <ul class="contact-list">
                                    <li><span class="icon fa fa-phone"></span> +51 912 648 531</li>
                                    <li><span class="icon fa fa-envelope"></span> ventas@grupocodware.com</li>

                                </ul>

                                <div class="timing">
                                    <strong>Horarios:</strong><br>
                                    Lunes a Viernes: 8 a.m. - 5 p.m.<br>
                                    Sabados: 8 a.m. - 1 p.m.
                                </div>

                                <div class="reclamaciones-box">
                                    <a href="https://facturacion.erpgrupocodware.com/reclamos" target="_blank">
                                        <span class="titulo">Libro de Reclamaciones</span>

                                        <img src="{{ asset('assets/images/icons/libro_reclamaciones.png') }}"
                                            alt="Libro de Reclamaciones">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="copyright">
                {{ date('Y') }} &copy; Todos los derechos reservados por
                <a href="https://grupocodware.com/" target="_blank">Grupo Codware</a>
            </div>
        </div>

    </div>
</footer>

<!-- BOTÓN WHATSAPP FLOTANTE -->
<a href="https://wa.me/51912648531?text=Hola%20quiero%20más%20información" class="whatsapp-float" target="_blank">

    <i class="fab fa-whatsapp"></i>

    <!-- NOTIFICACIÓN -->
    <span class="whatsapp-badge">1</span>

    <!-- MENSAJE PEQUEÑO -->
    <div class="whatsapp-bubble">
        ¿Deseas más información? Escribeme :)
    </div>

</a>

<!-- BOTÓN LIBRO DE RECLAMACIONES -->
<!-- <a href="https://facturacion.erpgrupocodware.com/reclamos" class="reclamaciones-float" target="_blank">

    <i class="fas fa-book"></i>

    <div class="reclamaciones-bubble">
        Libro de Reclamaciones
    </div>

</a>

<style>
    .reclamaciones-float {
    position: fixed;
    right: 25px;
    bottom: 100px;
    width: 55px;
    height: 55px;
    background: #ff9800;
    color: #fff;
    border-radius: 50%;
    text-align: center;
    font-size: 24px;
    line-height: 55px;
    z-index: 999;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.reclamaciones-float:hover {
    background: #e68900;
}

.reclamaciones-bubble {
    position: absolute;
    right: 70px;
    bottom: 10px;
    background: #333;
    color: #fff;
    padding: 6px 10px;
    border-radius: 5px;
    font-size: 12px;
    display: none;
    white-space: nowrap;
}

.reclamaciones-float:hover .reclamaciones-bubble {
    display: block;
}
</style> -->
