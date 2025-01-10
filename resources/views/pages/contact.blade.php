@extends('layouts.app')

@section('title', 'Contáctanos')

@section('body-class', 'without-bg')

@section('content')
<div class="inner-banner">
    <div class="base-container w-container">
        <div class="inner-banner-wrap">
            <h1 class="inner-title">Contáctanos</h1>
            <p class="inner-description">
                En PopeyeCargos SAC, estamos aquí para ayudarte con todas tus necesidades de transporte y logística. Si tienes alguna consulta, necesitas una cotización o deseas más información sobre nuestros servicios, no dudes en contactarnos.
                <br><br>
                Nos esforzamos por brindar un servicio excepcional a cada uno de nuestros clientes. Ponte en contacto con nosotros y descubre cómo podemos ser tu socio confiable en logística y transporte.
            </p>
        </div>
    </div>
</div>
<div class="inner-section">
    <div class="base-container w-container">
        <div class="contacts-wrapper">
            <div class="contacts-content-wrapper">
                <div class="contacts-title">
                    <h6 class="section-subtitle">Contáctanos</h6>
                    <h2>Estamos aquí para ayudarte</h2>
                    <p class="paragraph-large dark-gray">
                        En PopeyeCargos SAC, nuestro compromiso es brindar soluciones de transporte eficientes y confiables. Si tienes preguntas o necesitas información adicional sobre nuestros servicios, no dudes en ponerte en contacto con nosotros.
                    </p>
                </div>
                <div class="contacts-divider"></div>
                <div class="contacts-location-slider">
                    <div class="w-slider-mask">
                        <div class="w-slide">
                            <div class="contacts-detail-wrapper">
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
            <div class="contacts-form-wrapper">
                <h3 class="contacts-form-title">Envíanos un mensaje</h3>
                <div class="w-form">
                    <form id="email-form" name="email-form" method="get">
                        <input class="contacts-input w-input" maxlength="256" name="name" placeholder="Tu nombre" type="text" id="name" required>
                        <input class="contacts-input w-input" maxlength="256" name="email" placeholder="Tu correo electrónico" type="email" id="email" required>
                        <textarea placeholder="Tu mensaje" maxlength="5000" id="message" name="message" class="contacts-textarea w-input"></textarea>
                        <input type="submit" class="primary-button full-width-mobile w-button" value="Enviar">
                    </form>
                    <div class="w-form-done">
                        <div>¡Gracias! Hemos recibido tu mensaje.</div>
                    </div>
                    <div class="w-form-fail">
                        <div>¡Ups! Hubo un error al enviar tu mensaje.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
