<section class="services-three">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Item 1 -->
            <div class="service-block_five col-lg-3 col-md-6 col-sm-12">
                <div class="service-block_five-inner wow fadeInLeft">
                    <div class="service-block_five-color-layer"></div>

                    <div class="service-block_five_pattern"
                        style="background-image:url('{{ asset('assets/images/background/pattern-38.webp') }}')">
                    </div>

                    <div class="service-block_five_icon">
                        <img src="{{ asset('assets/images/icons/facturacion-electronica.png') }}" alt="clientes web" />
                    </div>

                    <h5 class="service-block_five_heading">
                        <a href="#">Facturación electrónica</a>
                    </h5>

                    <div class="service-block_five-text">
                        Automatiza tu negocio con sistemas de facturación electrónica en Perú.
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="service-block_five col-lg-3 col-md-6 col-sm-12">
                <div class="service-block_five-inner wow fadeInLeft">
                    <div class="service-block_five-color-layer"></div>

                    <div class="service-block_five_pattern"
                        style="background-image:url('{{ asset('assets/images/background/pattern-38.webp') }}')">
                    </div>

                    <div class="service-block_five_icon">
                        <img src="{{ asset('assets/images/icons/paginas-web.png') }}" alt="pagina web peru" />
                    </div>

                    <h5 class="service-block_five_heading">
                        <a href="#">Páginas web</a>
                    </h5>

                    <div class="service-block_five-text">
                        Diseñamos sitios web modernos que atraen clientes y aumentan ventas.
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="service-block_five col-lg-3 col-md-6 col-sm-12">
                <div class="service-block_five-inner wow fadeInLeft">
                    <div class="service-block_five-color-layer"></div>

                    <div class="service-block_five_pattern"
                        style="background-image:url('{{ asset('assets/images/background/pattern-38.webp') }}')">
                    </div>

                    <div class="service-block_five_icon">
                        <img src="{{ asset('assets/images/icons/erp.png') }}" alt="erp sistema" />
                    </div>

                    <h5 class="service-block_five_heading">
                        <a href="#">Sistemas a medida</a>
                    </h5>

                    <div class="service-block_five-text">
                        Gestiona tu empresa con sistemas empresariales personalizados.
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="service-block_five col-lg-3 col-md-6 col-sm-12">
                <div class="service-block_five-inner wow fadeInLeft">
                    <div class="service-block_five-color-layer"></div>

                    <div class="service-block_five_pattern"
                        style="background-image:url('{{ asset('assets/images/background/pattern-38.webp') }}')">
                    </div>

                    <div class="service-block_five_icon">
                        <img src="{{ asset('assets/images/icons/marketing.png') }}" alt="marketing digital peru" />
                    </div>

                    <h5 class="service-block_five_heading">
                        <a href="#">Marketing digital</a>
                    </h5>

                    <div class="service-block_five-text">
                        Aumenta tu alcance en redes sociales y consigue más clientes.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.service-block_five-inner {
    width: 100%;
    height: 100%;
    position: relative;
    padding: 30px 25px;
    border-radius: 14px;
    background: #051e26;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left; 
    transition: all 0.25s ease;
}

.service-block_five_icon img {
    width: 120px;
    height: 120px;
    object-fit: contain;
    display: block;
    margin: 0 auto 15px auto; /* centra horizontal */
}

/* TITULO */
.service-block_five_heading a {
    color: #ffffff;
    font-size: 17px;
    font-weight: 600;
    text-decoration: none;
}

/* TEXTO */
.service-block_five-text {
    color: rgba(255,255,255,0.75); /* 🔥 más elegante que blanco puro */
    font-size: 14px;
    line-height: 1.5;
    margin-top: 8px;
}

/* HOVER SUAVE */
.service-block_five-inner:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.25);
}

.service-block_five_heading {
    border-bottom: 2px solid #0d6efd;
    padding-bottom: 8px;
    margin-bottom: 10px;
}
</style>