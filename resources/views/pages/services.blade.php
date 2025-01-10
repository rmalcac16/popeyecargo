@extends('layouts.app')

@section('title', 'Servicios')

@section('body-class', 'without-bg')

@section('content')
<div class="inner-banner">
	<div class="base-container w-container">
		<div class="inner-banner-wrap">
			<h1 class="inner-title">Servicios</h1>
			<p class="inner-description">
				En PopeyeCargos SAC, ofrecemos una amplia gama de servicios de transporte y logística diseñados para satisfacer las necesidades de nuestros clientes en todo el Perú. Desde transporte terrestre hasta soluciones de almacenaje, nuestro objetivo es brindar un servicio seguro, puntual y eficiente.
				<br><br>
				Con años de experiencia en el sector, trabajamos para garantizar que cada envío llegue a su destino en óptimas condiciones. PopeyeCargos SAC es más que un servicio de transporte, somos tu socio estratégico en logística. ¡Confía en nosotros para transportar tus mercancías con excelencia!
			</p>
		</div>
	</div>
</div>
<div class="inner-section">
	<div class="base-container w-container">
		<div class="w-dyn-list">
			<div role="list" class="service-list-wrapper w-dyn-items">
				<div role="listitem" class="service-item w-dyn-item">
					<img src="{{ asset('img/terrestre.jpg') }}" loading="lazy" alt="Transporte Terrestre" class="service-list-image">
					<div class="service-list-content">
						<a href="/services/terrestre" class="w-inline-block">
							<h3 class="service-link-title">Transporte Terrestre</h3>
						</a>
						<p class="service-list-description">Conectamos regiones del Perú con un servicio de transporte terrestre confiable, asegurando que tus mercancías lleguen a tiempo y en perfectas condiciones.</p>
						<a href="/services/terrestre" class="link-with-icon w-inline-block">
							<div>Conoce Más</div>
							<img src="{{ asset('img/arrow-icon.svg') }}" loading="lazy" alt="Arrow Icon">
						</a>
					</div>
				</div>
				<div role="listitem" class="service-item w-dyn-item">
					<img src="{{ asset('img/almacenaje.jpg') }}" loading="lazy" alt="Servicio de Almacenaje" class="service-list-image">
					<div class="service-list-content">
						<a href="/services/almacenaje" class="w-inline-block">
							<h3 class="service-link-title">Servicio de Almacenaje</h3>
						</a>
						<p class="service-list-description">Ofrecemos espacios de almacenaje estratégicos y seguros, perfectos para resguardar tus productos mientras llegan a su destino.</p>
						<a href="/services/almacenaje" class="link-with-icon w-inline-block">
							<div>Conoce Más</div>
							<img src="{{ asset('img/arrow-icon.svg') }}" loading="lazy" alt="Arrow Icon">
						</a>
					</div>
				</div>
				<div role="listitem" class="service-item w-dyn-item">
					<img src="{{ asset('img/paqueteria.jpg') }}" loading="lazy" alt="Servicio de Paquetería" class="service-list-image">
					<div class="service-list-content">
						<a href="/services/paqueteria" class="w-inline-block">
							<h3 class="service-link-title">Servicio de Paquetería</h3>
						</a>
						<p class="service-list-description">Nos especializamos en paquetería de todo tamaño, entregando rápidamente tus envíos a las diferentes regiones del Perú.</p>
						<a href="/services/paqueteria" class="link-with-icon w-inline-block">
							<div>Conoce Más</div>
							<img src="{{ asset('img/arrow-icon.svg') }}" loading="lazy" alt="Arrow Icon">
						</a>
					</div>
				</div>
				<div role="listitem" class="service-item w-dyn-item">
					<img src="{{ asset('img/express.jpg') }}" loading="lazy" alt="Servicio Express" class="service-list-image">
					<div class="service-list-content">
						<a href="/services/express" class="w-inline-block">
							<h3 class="service-link-title">Servicio Express</h3>
						</a>
						<p class="service-list-description">Nuestra opción de transporte express asegura entregas rápidas, adaptadas a las necesidades urgentes de nuestros clientes.</p>
						<a href="/services/express" class="link-with-icon w-inline-block">
							<div>Conoce Más</div>
							<img src="{{ asset('img/arrow-icon.svg') }}" loading="lazy" alt="Arrow Icon">
						</a>
					</div>
				</div>
				<div role="listitem" class="service-item w-dyn-item">
					<img src="{{ asset('img/regional.jpg') }}" loading="lazy" alt="Cobertura Regional" class="service-list-image">
					<div class="service-list-content">
						<a href="/services/regional" class="w-inline-block">
							<h3 class="service-link-title">Cobertura Regional</h3>
						</a>
						<p class="service-list-description">Llegamos a varias regiones del Perú, conectando comunidades con servicios de transporte accesibles y confiables.</p>
						<a href="/services/regional" class="link-with-icon w-inline-block">
							<div>Conoce Más</div>
							<img src="{{ asset('img/arrow-icon.svg') }}" loading="lazy" alt="Arrow Icon">
						</a>
					</div>
				</div>
				<div role="listitem" class="service-item w-dyn-item">
					<img src="{{ asset('img/atencion.jpg') }}" loading="lazy" alt="Atención Personalizada" class="service-list-image">
					<div class="service-list-content">
						<a href="/services/atencion" class="w-inline-block">
							<h3 class="service-link-title">Atención Personalizada</h3>
						</a>
						<p class="service-list-description">Nuestro equipo se enfoca en brindar atención personalizada, asegurando soluciones adaptadas a las necesidades de cada cliente.</p>
						<a href="/services/atencion" class="link-with-icon w-inline-block">
							<div>Conoce Más</div>
							<img src="{{ asset('img/arrow-icon.svg') }}" loading="lazy" alt="Arrow Icon">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
