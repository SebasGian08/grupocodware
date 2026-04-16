<div class="swiper bannerSwiper">

    <div class="swiper-wrapper">

        <!-- SLIDE 1 -->
        <div class="swiper-slide hero-slide"
            style="background-image:url('{{ asset('assets/images/background/pattern-27.webp') }}')">
            <div class="hero-container">
                <div class="hero-text">
                    <h1 class="titulo-principal sec-title_three-heading">
                        <span class="gradient-text">Soluciones digitales a medida</span>
                        para tu negocio
                    </h1>
                    <div class="text">
                        Impulsa tu negocio, aumenta tus ventas y posiciona tu marca en internet.
                    </div>
                    <div class="col-lg-12 text-center mt-3">
                        <a href="https://wa.me/message/AH4NBZN4QOJXM1" target="_blank"
                            class="theme-btn btn-style-seven">
                            <span class="btn-wrap">
                                <span class="text-one">
                                    <i class="fas fa-paper-plane"></i> Cotiza ahora
                                </span>
                                <span class="text-two">
                                    <i class="fas fa-paper-plane"></i> Cotiza ahora
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="hero-image">
                    <img src="{{ asset('assets/images/resource/bannerpng.webp') }}" alt="">
                </div>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="swiper-slide hero-slide"
            style="background-image:url('{{ asset('assets/images/background/pattern-27.webp') }}')">
            <div class="hero-container">
                <div class="hero-text">
                    <h1 class="titulo-principal sec-title_three-heading">
                        <span class="gradient-text">Facturación electrónica</span>
                        para empresas modernas
                    </h1>
                    <div class="text">
                        Emite comprobantes electrónicos y controla tu facturación sin complicaciones.
                    </div>
                    <div class="col-lg-12 text-center mt-3">
                        <a href="https://wa.me/message/AH4NBZN4QOJXM1" target="_blank"
                            class="theme-btn btn-style-seven">
                            <span class="btn-wrap">
                                <span class="text-one">
                                    <i class="fas fa-laptop-code" style="margin-right:8px;"></i> Solicitar demo
                                </span>
                                <span class="text-two">
                                    <i class="fas fa-laptop-code" style="margin-right:8px;"></i> Solicitar demo
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="hero-image">
                    <img src="{{ asset('assets/images/resource/bannerpng2.webp') }}" alt="">
                </div>

            </div>
        </div>

        <div class="swiper-slide hero-slide"
            style="background-image:url('{{ asset('assets/images/background/pattern-27.webp') }}')">
            <div class="hero-container">
                <div class="hero-text">
                    <h1 class="titulo-principal sec-title_three-heading">
                        <span class="gradient-text">Páginas web y tiendas virtuales</span><br>
                        que venden por ti
                    </h1>
                    <div class="text">
                        Diseñamos sitios modernos, rápidos y optimizados para convertir visitas en clientes.
                    </div>
                    <div class="col-lg-12 text-center mt-3">
                        <a href="https://wa.me/message/AH4NBZN4QOJXM1" target="_blank"
                            class="theme-btn btn-style-seven">
                            <span class="btn-wrap">
                                <span class="text-one">
                                    Saber más <i class="fas fa-arrow-right" style="margin-right:8px;"></i>
                                </span>
                                <span class="text-two">
                                    Saber más <i class="fas fa-arrow-right" style="margin-right:8px;"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="hero-image">
                    <img src="{{ asset('assets/images/resource/bannerpng3.webp') }}" alt="">
                </div>

            </div>
        </div>
    </div>

    <!-- controles -->
    <div class="swiper-pagination"></div>
</div>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
new Swiper('.bannerSwiper', {
    loop: true,
    speed: 900,
    effect: 'fade',

    fadeEffect: {
        crossFade: true
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
</script>