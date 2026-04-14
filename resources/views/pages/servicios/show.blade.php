@extends('layouts.appweb')

@section('title', 'Grupo Codware')

@section('content')

<div class="swiper bannerSwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide hero-slide" style="background-image:url('{{ asset('storage/'.$service->portada) }}');
                   background-size:cover;
                   background-position:center;">
            <div class="hero-container">
                <div class="hero-text">
                    <h1 class="titulo-principal sec-title_three-heading">
                        {{ $service->descripcion_portada }}
                    </h1>
                    <p>
                        {{ $service->descripcion_breve_portada }}
                    </p>
                    <button class="theme-btn btn-style-seven">
                        Saber más
                    </button>
                </div>
                <div class="hero-image">
                    @if($service->imagen_portada)
                    <img src="{{ asset('storage/'.$service->imagen_portada) }}" alt="{{ $service->nombre }}">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Three -->
<section class="testimonial-three">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Carousel Column -->
            <div class="testimonial-three_carousel-column col-lg-6 col-md-12 col-sm-12">
                <div class="testimonial-three_carousel-inner">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        {{ $service->content }}
                    </div>
                </div>
            </div>
            <!-- Image Column -->
            <div class="testimonial-three_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="testimonial-three_image-inner">
                    <div class="testimonial-three_image">
                        <img src="{{ asset('storage/'.$service->imagen_referencial) }}" alt="image" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Testimonial Three -->



@if($service->plans && $service->plans->count())

<section class="pricing-one">
    <div class="pricing-one_pattern-layer"
        style="background-image:url({{ asset('assets/images/background/pattern-23.png') }})"></div>

    <div class="pricing-one_pattern-two" data-parallax='{"y" : -80}'
        style="background-image:url({{ asset('assets/images/background/pattern-24.png') }})"></div>

    <div class="auto-container">

        <div class="sec-title_two centered">
            <div class="sec-title_two-title">~ Planes Exclusivos ~</div>
            <h2 class="sec-title_two-heading">
                Nuestros <span>increíbles</span> Paquetes <br>de Páginas Web
            </h2>
        </div>

        <div class="row clearfix">

            @foreach($service->plans as $plan)

            <div class="price-block col-lg-4 col-md-6 col-sm-12">

                <div class="inner-box">

                    {{-- DESTACADO --}}
                    @if($plan->destacado)
                    <div class="recomend">Más Vendido</div>
                    @endif

                    {{-- TITULO --}}
                    <div class="title-box">
                        <h5>{{ $plan->nombre }}</h5>
                        <div class="text">{{ $plan->descripcion }}</div>
                    </div>

                    {{-- PRECIO --}}
                    <div class="price">
                        S/{{ $plan->precio }}
                    </div>

                    {{-- FEATURES --}}
                    @if($plan->features && $plan->features->count())
                    <div class="lower-box">
                        <ul class="price-list">

                            @foreach($plan->features as $feature)
                            <li>{{ $feature->descripcion }}</li>
                            @endforeach

                        </ul>
                    </div>
                    @endif

                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>

@endif
<!-- End Pricing One -->
@include('sections.contact')

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
@endsection