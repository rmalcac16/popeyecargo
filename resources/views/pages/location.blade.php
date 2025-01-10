@extends('layouts.app')

@section('title', 'Agencias')

@section('content')
<div class="contact-banner">
	<div class="base-container w-container">
		<div>
			<h1 class="banner-title">Agencias</h1>
		</div>
	</div>
</div>
<div class="locations-section" style="padding-bottom: 2rem;">
    <div class="base-container w-container">
        <div class="locations-wrapper">
            <div class="location-item">
                <h3>Lima - La Victoria</h3>
                <div class="location-content">
                    <div class="location-icon map"></div>
                    <p class="location-text">Calle Ignacio Cossio 1505</p>
                </div>
                <div class="location-content">
                    <div class="location-icon"></div>
                    <a href="tel:988069143" class="location-link">988 069 143</a>
                </div>
                <div class="location-content">
                    <div class="location-icon"></div>
                    <a href="mailto:contacto@popeyecargo.com" class="location-link">contacto@popeyecargo.com</a>
                </div>
                <a href="https://goo.gl/maps/example1" target="_blank" class="link-with-icon margin-top w-inline-block">
                    <div>Ubícanos</div>
                    <img src="{{ asset('img/arrow-icon.svg') }}" alt="Flecha" loading="lazy">
                </a>
            </div>
            <div class="location-item">
                <h3>Lima - La Victoria</h3>
                <div class="location-content">
                    <div class="location-icon map"></div>
                    <p class="location-text">Jr. Alexander Von Humboldt 631</p>
                </div>
                <div class="location-content">
                    <div class="location-icon"></div>
                    <a href="tel:982982321" class="location-link">982 982 321</a>
                </div>
                <div class="location-content">
                    <div class="location-icon"></div>
                    <a href="mailto:contacto@popeyecargo.com" class="location-link">contacto@popeyecargo.com</a>
                </div>
                <a href="https://goo.gl/maps/example2" target="_blank" class="link-with-icon margin-top w-inline-block">
                    <div>Ubícanos</div>
                    <img src="{{ asset('img/arrow-icon.svg') }}" alt="Flecha" loading="lazy">
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
