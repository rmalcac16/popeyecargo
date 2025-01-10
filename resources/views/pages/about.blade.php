@extends('layouts.app')

@section('title', 'Sobre Nosotros')

@section('body-class', 'without-bg')

@section('content')
<div class="inner-banner">
	<div class="base-container w-container">
		<div class="inner-banner-wrap">
			<h1 class="inner-title">Sobre Nosotros</h1>
			<p class="inner-description">
				En PopeyeCargos SAC, somos líderes en transporte terrestre, conectando cada rincón del Perú con soluciones logísticas eficientes y personalizadas. Nuestra misión es garantizar la seguridad, puntualidad y excelencia en cada envío, asegurando que tus mercancías lleguen a su destino en las mejores condiciones.
				<br><br>
				Con más de una década de experiencia, trabajamos con un equipo comprometido que entiende la importancia de tu carga. En PopeyeCargos SAC, no solo transportamos bienes, también construimos confianza y relaciones duraderas con nuestros clientes. ¡Déjanos ser tu socio confiable en logística y transporte!
			</p>
		</div>
	</div>
	<img class="banner-image" src="{{ asset('img/nosotros.jpg') }}" alt="Camión de transporte">
</div>
<div class="inner-section primary-light-bg">
    <div class="base-container w-container">
        <div class="story-wrapper">
            <div class="story-text">
                <h2>Nuestra Historia</h2>
                <div class="description-wrap">
                    <p class="paragraph-large dark-gray">En PopeyeCargos SAC, nos enorgullecemos de ser una empresa líder en transporte terrestre en Perú, conectando regiones con soluciones logísticas eficientes y personalizadas.</p>
                    <p class="paragraph-large dark-gray">Desde nuestros inicios, hemos trabajado con dedicación para garantizar la seguridad, puntualidad y satisfacción de nuestros clientes en cada entrega.</p>
                </div>
                <div class="accordion">
                    <div class="accordion-item w-dropdown">
                        <div class="accordion-toggle w-dropdown-toggle" id="w-dropdown-toggle-4" aria-controls="w-dropdown-list-4" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                            <div class="accordion-title-wrap">
                                <div class="accordion-number">1</div>
                                <div>Fundador</div>
                            </div>
                            <div class="accordion-icon">&#x25BC;</div>
                        </div>
                        <nav style="height: 0;" class="accordion-list w-dropdown-list" id="w-dropdown-list-4" aria-labelledby="w-dropdown-toggle-4">
                            <p class="accordion-list-content">Nuestro fundador tuvo la visión de conectar cada rincón del Perú con un servicio de transporte confiable y eficiente, enfocándose en la satisfacción del cliente.</p>
                        </nav>
                    </div>
                    <div class="accordion-item w-dropdown">
                        <div class="accordion-toggle w-dropdown-toggle" id="w-dropdown-toggle-5" aria-controls="w-dropdown-list-5" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                            <div class="accordion-title-wrap">
                                <div class="accordion-number">2</div>
                                <div>Inicio de Operaciones</div>
                            </div>
                            <div class="accordion-icon">&#x25BC;</div>
                        </div>
                        <nav style="height: 0;" class="accordion-list w-dropdown-list" id="w-dropdown-list-5" aria-labelledby="w-dropdown-toggle-5">
                            <p class="accordion-list-content">Comenzamos con un pequeño equipo y grandes sueños, conectando ciudades y ofreciendo soluciones logísticas adaptadas a las necesidades de cada cliente.</p>
                        </nav>
                    </div>
                    <div class="accordion-item w-dropdown">
                        <div class="accordion-toggle w-dropdown-toggle" id="w-dropdown-toggle-6" aria-controls="w-dropdown-list-6" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">
                            <div class="accordion-title-wrap">
                                <div class="accordion-number">3</div>
                                <div>Primer Cliente Importante</div>
                            </div>
                            <div class="accordion-icon">&#x25BC;</div>
                        </div>
                        <nav style="height: 0;" class="accordion-list w-dropdown-list" id="w-dropdown-list-6" aria-labelledby="w-dropdown-toggle-6">
                            <p class="accordion-list-content">Nuestro primer cliente fue un socio clave que confió en nosotros para transportar su carga. Este hito marcó el inicio de un camino de éxitos y crecimiento.</p>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="story-image-wrap">
                <img class="story-image" src="{{ asset('img/our_story.jpg') }}" alt="Historia de PopeyeCargos">
            </div>
        </div>
    </div>
</div>
@endsection