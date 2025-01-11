@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div>
    <div data-delay="4000" data-animation="slide" class="slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
        <div class="mask w-slider-mask">
            <div class="slide first-slide w-slide">
                <div class="slider-container w-container">
                    <h1 class="hero banner" data-aos="zoom-in">Transporte de Mercaderías</h1>
                    <p class="banner-slider-description" data-aos="zoom-in" data-aos-delay="150">
                        Operador logístico confiable, ofreciendo transporte terrestre rápido y eficiente en varias regiones del Perú. Con nosotros, tus envíos siempre estarán seguros y puntuales.
                    </p>
                    <div class="buttons-wrapper slider">
                        <div class="buttons-same-size" data-aos="zoom-in" data-aos-delay="400">
                            <a href="{{ route('contact') }}" class="primary-button primary-hover">Cotiza aquí</a>
                        </div>
                        <div class="buttons-same-size" data-aos="zoom-in" data-aos-delay="400">
                            <a href="{{ route('contact') }}" class="primary-button-white">Contáctanos</a>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="slide second-slide w-slide">
                <div class="slider-container w-container">
                    <p class="hero banner">Llevando la Logística al Siguiente Nivel</p>
                    <p class="banner-slider-description">PopeyeCargos ofrece una metodología comprobada para garantizar un transporte eficiente y personalizado.<br/></p>
                    <div class="buttons-wrapper slider">
                        <div class="buttons-same-size"><a href="{{ route('contact') }}" class="primary-button primary-hover">Cotiza aquí</a></div>
                        <div class="buttons-same-size"><a href="{{ route('contact') }}" class="primary-button-white">Contáctanos</a></div>
                    </div>
                </div>
            </div>
            <div class="slide third-slide w-slide">
                <div class="slider-container w-container">
                    <p class="hero banner">Optimiza tu Cadena de Suministro</p>
                    <p class="banner-slider-description">Obtén visibilidad total de tu cadena de suministro para reducir costos, optimizar procesos y maximizar ganancias.<br/></p>
                    <div class="buttons-wrapper slider">
                        <div class="buttons-same-size"><a href="{{ route('contact') }}" class="primary-button primary-hover">Cotiza aquí</a></div>
                        <div class="buttons-same-size"><a href="{{ route('contact') }}" class="primary-button-white">Contáctanos</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-arrow w-slider-arrow-left">
            <div class="arrow-icon w-icon-slider-left"></div>
        </div>
        <div class="right-arrow w-slider-arrow-right">
            <div class="arrow-icon-right w-icon-slider-right"></div>
        </div>
        <div class="slide-nav w-slider-nav"></div>
    </div>            
</div>
<div class="section features">
    <div class="base-container w-container">
        <div class="home-features">
            <div class="features-item" data-aos="fade-up">
                <img src="https://cdn.prod.website-files.com/62f0e3371ad4ab59bf6b21b0/62f10a011ea8faf569b1d2d4_delivery_transport_icon.svg" loading="lazy" alt="Icono de Transporte Terrestre" class="service-icon"/>
                <div>
                    <h4>Transporte Terrestre</h4>
                    <p>Ofrecemos soluciones logísticas eficientes, conectando ciudades y regiones en todo Perú con seguridad y puntualidad.</p>
                </div>
            </div>
            <div class="features-item" data-aos="fade-up">
                <img src="https://cdn.prod.website-files.com/62f0e3371ad4ab59bf6b21b0/62fcab6b72b68d71616925eb_Location.svg" loading="lazy" alt="Icono de Cobertura Nacional" class="service-icon"/>
                <div>
                    <h4>Cobertura Nacional</h4>
                    <p>Estamos presentes en todas las regiones del país, llegando a las ciudades más remotas con nuestro servicio confiable.</p>
                </div>
            </div>  
            <div class="features-item" data-aos="fade-up">
                <img src="https://cdn.prod.website-files.com/62f0e3371ad4ab59bf6b21b0/62fcac2fea0f265609c23ee5_Delivery.svg" loading="lazy" alt="Icono de Entrega Rápida" class="service-icon"/>
                <div>
                    <h4>Entregas Rápidas</h4>
                    <p>Optimizamos nuestras rutas y tiempos para garantizar entregas ágiles y sin contratiempos en todo Perú.</p>
                </div>
            </div>
            <div class="features-item" data-aos="fade-up">
                <img src="https://cdn.prod.website-files.com/62f0e3371ad4ab59bf6b21b0/62f25cab295fa11439e82fa9_box_delivery_icon.svg" loading="lazy" alt="Icono de Transporte de Carga" class="service-icon"/>
                <div>
                    <h4>Transporte de Carga</h4>
                    <p>Manejamos cargas pequeñas, medianas y grandes, asegurando la máxima seguridad en cada envío.</p>
                </div>
            </div>
            <div class="features-item" data-aos="fade-up">
                <img src="https://cdn.prod.website-files.com/62f0e3371ad4ab59bf6b21b0/62f109de37f05d3cb7f5ded3_cruise_ship_icon.svg" loading="lazy" alt="Icono de Soporte al Cliente" class="service-icon"/>
                <div>
                    <h4>Soporte al Cliente</h4>
                    <p>Nuestro equipo de soporte está siempre disponible para resolver tus dudas y brindarte asistencia personalizada.</p>
                </div>
            </div>
            <div class="features-item" data-aos="fade-up">
                <img src="https://cdn.prod.website-files.com/62f0e3371ad4ab59bf6b21b0/62fcac2fea0f265609c23ee5_Delivery.svg" loading="lazy" alt="Icono de Flexibilidad en Envios" class="service-icon"/>
                <div>
                    <h4>Flexibilidad en Envíos</h4>
                    <p>Adaptamos nuestras soluciones logísticas a las necesidades específicas de cada cliente y tipo de carga.</p>
                </div>
            </div>
        </div>
    </div>
</div>
         
<div class="section primary-light-bg">
    <div class="base-container w-container">
        <div class="title-wrapper width-700">
            <h2 class="text-center" data-aos="fade-up" data-aos-anchor-placement="top-center">Confía en PopeyeCargos SAC</h2>
            <p class="paragraph-description dark-gray" data-aos="fade-up" data-aos-anchor-placement="top-center"> En PopeyeCargos SAC, ofrecemos soluciones de transporte terrestre que conectan cada rincón del Perú. Con nosotros, tus envíos siempre estarán seguros, puntuales y respaldados por un equipo comprometido con la excelencia.</p>
        </div>
        <div class="help-wrapper top-space">
            <div class="help-wrap">
                <img src="{{ asset('img/Box.jpg') }}" data-aos="zoom-in" loading="lazy" width="367" class="solution-img"/>
            </div>
            <div class="help-animation" data-aos="fade-up">
                <img src="{{ asset('img/circle.svg') }}" loading="lazy" alt="Circle Big" class="main-circle"/>
                <div class="first-line" style="opacity: 1; width: 260px; height: 3px; transform: translate3d(20px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
                <img src="{{ asset('img/circle-sm.svg') }}"  loading="lazy" alt="Circle Small" class="small-circle" style="opacity: 1; transform: translate3d(260px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"/>
                <div class="second-line" style="opacity: 1; width: 136px; height: 150px;"></div>
                <div class="third-line" style="opacity: 1; width: 136px; height: 174px;"></div>
                <img src="{{ asset('img/circle-sm.svg') }}" loading="lazy" alt="Circle Small" class="second-small-circle" style="opacity: 1; transform: translate3d(260px, 148px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"/>
                <img src="{{ asset('img/circle-sm.svg') }}" loading="lazy" alt="Circle Small" class="third-small-circle" style="opacity: 1; transform: translate3d(260px, 302px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"/>
            </div>            
            <div class="help-details-wrap">
                <div>
                    <h3 data-aos="fade-left">Cobertura Nacional</h3>
                    <p data-aos="fade-left" data-aos-delay="300" class="paragraph-large dark-gray">Llegamos a varios destinos del Perú con seguridad y puntualidad.</p>
                </div>
                <div>
                    <h3 data-aos="fade-left">Atención Personalizada</h3>
                    <p data-aos="fade-left" data-aos-delay="300" class="paragraph-large dark-gray">Nuestro equipo se adapta a las necesidades de cada cliente.</p>
                </div>
                <div>
                    <h3 data-aos="fade-left">Compromiso y Seguridad</h3>
                    <p  data-aos="fade-left" data-aos-delay="300" class="paragraph-large dark-gray">Aseguramos que cada envío sea tratado con el mayor cuidado y entregado puntualmente.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
