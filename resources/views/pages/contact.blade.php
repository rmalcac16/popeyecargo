@extends('layouts.app')

@section('title', 'Contáctanos')

@section('body-class', 'without-bg')

@section('content')
<div class="inner-banner" data-aos="fade-in" data-aos-duration="1000">
    <div class="base-container w-container">
        <div class="inner-banner-wrap" data-aos="fade-up" data-aos-delay="200">
            <h1 class="inner-title">Contáctanos</h1>
            <p class="inner-description">
                En PopeyeCargos SAC, estamos aquí para ayudarte con todas tus necesidades de transporte y logística. Si tienes alguna consulta, necesitas una cotización o deseas más información sobre nuestros servicios, no dudes en contactarnos.
                <br><br>
                Nos esforzamos por brindar un servicio excepcional a cada uno de nuestros clientes. Ponte en contacto con nosotros y descubre cómo podemos ser tu socio confiable en logística y transporte.
            </p>
        </div>
    </div>
</div>
<div class="inner-section" data-aos="fade-up" data-aos-duration="1000">
    <div class="base-container w-container">
        <div class="contacts-wrapper">
            <div class="contacts-content-wrapper" data-aos="fade-right" data-aos-duration="1200">
                <div class="contacts-title">
                    <h6 class="section-subtitle" data-aos="fade-up" data-aos-delay="200">Contáctanos</h6>
                    <h2 data-aos="fade-up" data-aos-delay="400">Estamos aquí para ayudarte</h2>
                    <p class="paragraph-large dark-gray" data-aos="fade-up" data-aos-delay="600">
                        En PopeyeCargos SAC, nuestro compromiso es brindar soluciones de transporte eficientes y confiables. Si tienes preguntas o necesitas información adicional sobre nuestros servicios, no dudes en ponerte en contacto con nosotros.
                    </p>
                </div>
                <div class="contacts-divider" data-aos="fade-up" data-aos-delay="800"></div>
                <div class="contacts-location-slider" data-aos="fade-up" data-aos-delay="1000">
                    <div class="w-slider-mask">
                        <div class="w-slide">
                            <div class="contacts-detail-wrapper" data-aos="fade-up" data-aos-delay="1200">
                                <h3>Lima - La Victoria</h3>
                                <div class="contacts-detail">
                                    <p class="contacts-icon"></p>
                                    <p class="paragraph-large paragraph-no-margin">Calle Ignacio Cossio 1505</p>
                                </div>
                                <div class="contacts-detail">
                                    <p class="contacts-icon"></p>
                                    <a href="tel:+51988069143" class="paragraph-no-margin">+51 988 069 143</a>
                                </div>
                                <div class="contacts-detail">
                                    <p class="contacts-icon"></p>
                                    <a href="mailto:contacto@popeyecargo.com" class="paragraph-no-margin">contacto@popeyecargo.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contacts-form-wrapper" data-aos="fade-left" data-aos-duration="1200">
                <h3 class="contacts-form-title">Envíanos un mensaje</h3>
                <div class="w-form">
                    <form id="email-form" name="email-form" method="get">
                        <input class="contacts-input w-input" maxlength="256" name="name" placeholder="Tu nombre" type="text" id="name" required data-aos="fade-up" data-aos-delay="200">
                        <input class="contacts-input w-input" maxlength="256" name="email" placeholder="Tu correo electrónico" type="email" id="email" required data-aos="fade-up" data-aos-delay="400">
                        <textarea placeholder="Tu mensaje" maxlength="5000" id="message" name="message" class="contacts-textarea w-input" data-aos="fade-up" data-aos-delay="600"></textarea>
                        <input type="submit" class="primary-button full-width-mobile w-button" value="Enviar" data-aos="fade-up" data-aos-delay="800">
                    </form>
                    <div class="w-form-done" data-aos="fade-up" data-aos-delay="1000">
                        <div>¡Gracias! Hemos recibido tu mensaje.</div>
                    </div>
                    <div class="w-form-fail" data-aos="fade-up" data-aos-delay="1000">
                        <div>¡Ups! Hubo un error al enviar tu mensaje.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
