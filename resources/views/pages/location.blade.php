@extends('layouts.app')

@section('title', 'Agencias')

@section('content')
<div class="simple-banner contact-us">
    <div class="base-container w-container">
        <div class="title-wrapper" data-aos="fade-in" data-aos-duration="1000">
            <h1 class="text-white" data-aos="fade-right" data-aos-duration="800">Nuestras Agencias</h1>
            <p class="paragraph-large text-white" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                Descubre nuestras oficinas estratégicamente ubicadas para brindarte el mejor servicio. En Popeye Cargos SAC, trabajamos para garantizar tu comodidad y la eficiencia en cada envío. ¡Encuentra la agencia más cercana a ti!
            </p>
        </div>
    </div>
</div>

<div class="inner-section without-bottom-space" style="padding-bottom: 4rem">
    <div class="base-container w-container" data-aos="fade-up" data-aos-duration="1000">
        <div class="location-tabs w-tabs" data-aos="fade-up" data-aos-duration="800">
            <div class="location-tabs-menu w-tab-menu" role="tablist">
                <div class="location-tab-title-wrapper" data-aos="fade-right" data-aos-duration="800">
                    <h2>Nuestras agencias</h2>
                    <p id="location-title" class="paragraph-large dark-gray"></p>
                </div>
                <a class="location-tab" data-aos="zoom-in" data-aos-duration="800" data-image="{{ asset('img/lima1-bg.jpg') }}" data-province="La Victoria" data-location="Lima" data-address="Jr. Alexander Von Humboldt 631" data-phone="982 981 321" data-email="ofilima1@popeyecargo.com">
                    <div class="location-icon right-space"></div>
                    <div>
                        <h5 class="location-tab-title">Lima - La Victoria</h5>
                        <p class="location-text">Jr. Alexander Von Humboldt 631</p>
                    </div>
                </a>
                <a class="location-tab" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200" data-image="{{ asset('img/lima2-bg.jpg') }}" data-province="La Victoria" data-location="Lima" data-address="Calle Ignacio Cossio 1505" data-phone="988 069 143" data-email="ofilima2@popeyecargo.com">
                    <div class="location-icon right-space"></div>
                    <div>
                        <h5 class="location-tab-title">Lima - La Victoria</h5>
                        <p class="location-text">Calle Ignacio Cossio 1505</p>
                    </div>
                </a>
                <a class="location-tab" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="400" data-image="{{ asset('img/cajamarca-bg.jpg') }}" data-province="" data-location="Cajamarca" data-address="Av. La Paz Nro 1262" data-phone="990 455 009" data-email="oficajamarca@popeyecargo.com">
                    <div class="location-icon right-space"></div>
                    <div>
                        <h5 class="location-tab-title">Cajamarca</h5>
                        <p class="location-text">Av. La Paz Nro 1262</p>
                    </div>
                </a>
                <a class="location-tab" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="600" data-image="{{ asset('img/celendin-bg.jpg') }}" data-province="" data-location="Celendín" data-address="Jr. Bolognesi Nro 1020" data-phone="998 889 904" data-email="oficelendin@popeyecargo.com">
                    <div class="location-icon right-space"></div>
                    <div>
                        <h5 class="location-tab-title">Celendín</h5>
                        <p class="location-text">Jr. Bolognesi Nro 1020</p>
                    </div>
                </a>                                
            </div>
            <div class="location-tabs-content">
                <div class="location-tab-pane w--tab-active" style="background-image: url('{{ asset('img/lima1-bg.jpg') }}');" data-aos="fade-in" data-aos-duration="800">
                    <div class="location-tab-pane-content-wrapper">
                        <h3 class="location-tab-pane-title"></h3>
                        <p class="paragraph-large dark-gray"></p>
                        <div class="location-tab-pane-info">
                            <div class="location-title-wrapper">
                                <div class="location-icon right-space" data-aos="fade-up" data-aos-delay="100"></div>
                                <h5 class="semi-bold" data-aos="fade-up" data-aos-delay="100">Teléfono</h5>
                            </div>
                            <a href="tel:988069143" class="location-link"></a>
                        </div>
                        <div class="location-tab-pane-info">
                            <div class="location-title-wrapper">
                                <div class="location-icon right-space" data-aos="fade-up" data-aos-delay="200"></div>
                                <h5 class="semi-bold" data-aos="fade-up" data-aos-delay="200">Correo electrónico</h5>
                            </div>
                            <a href="mailto:988069143" class="location-link"></a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection
