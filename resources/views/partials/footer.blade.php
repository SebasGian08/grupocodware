<!-- Footer -->
<footer class="main-footer" style="background-image:url({{ asset('assets/images/background/pattern-11.webp') }})">
    <div class="auto-container">

        <div class="widgets-section">
            <div class="row clearfix">

                <div class="big-column col-lg-8 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('assets/images/footer-logo.webp') }}" alt="CODWARE" />
                                    </a>
                                </div>

                                <div class="text" style="text-align: justify;">
                                    Especialistas en Programación Web, Diseño Gráfico, Marketing Digital.
                                    Desarrollamos soluciones digitales a medida para tu negocio.
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
                                    <form method="POST" action="">
                                        @csrf

                                        <input type="text" name="website" style="display:none">

                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="correo@ejemplo.com"
                                                required>
                                            <button type="submit">
                                                <span class="fa-solid fa-paper-plane"></span>
                                            </button>
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

                <div class="big-column col-lg-4 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <div class="footer-column col-lg-12 col-md-6 col-sm-12">
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
<a href="https://wa.me/51912648531?text=Hola%20quiero%20más%20información"
   class="whatsapp-float" target="_blank">

    <i class="fab fa-whatsapp"></i>

    <!-- NOTIFICACIÓN -->
    <span class="whatsapp-badge">1</span>

    <!-- MENSAJE PEQUEÑO -->
    <div class="whatsapp-bubble">
        ¿Deseas más información? Escribeme :)
    </div>

</a>

<style>

/* =========================
   BOTÓN WHATSAPP
========================= */
.whatsapp-float {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background: #25D366;
    color: white;
    width: 58px;
    height: 58px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    z-index: 999;
    text-decoration: none;
    animation: pulse 1.5s infinite;
}

/* =========================
   BADGE ROJO
========================= */
.whatsapp-badge {
    position: absolute;
    top: 2px;
    right: 2px;
    background: #ff2d2d;
    color: #fff;
    font-size: 11px;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    border: 2px solid #fff;
}

/* =========================
   MENSAJE PEQUEÑO
========================= */
.whatsapp-bubble {
    position: absolute;
    right: 70px;
    bottom: 18px;
    background: #fff;
    color: #333;
    font-weight: 400;
    padding: 6px 10px;
    border-radius: 10px;
    font-size: 14px;
    white-space: nowrap;
    box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    border-left: 3px solid #25D366;
    animation: floatBubble 2s ease-in-out infinite;
}

/* flechita */
.whatsapp-bubble::after {
    content: "";
    position: absolute;
    right: -5px;
    bottom: 10px;
    width: 0;
    height: 0;
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    border-left: 5px solid #fff;
}

</style>