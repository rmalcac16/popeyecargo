<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
        <title>@yield('title') - {{ config('app.name') }}</title>
		<meta content="@yield('title') - {{ config('app.name') }}" property="og:title"/>
		<meta content="@yield('title') - {{ config('app.name') }}" property="twitter:title"/>
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta content="Webflow" name="generator"/>
		<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('css/extra.css')}}" rel="stylesheet" type="text/css"/>
		<link href="https://fonts.googleapis.com" rel="preconnect"/>
		<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/>
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">WebFont.load({ google: { families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Inter:regular,500,600,700"]  }});</script><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
		<link href="{{ asset('img/favicon.png') }}" rel="shortcut icon" type="image/x-icon"/>
		<link href="{{ asset('img/favicon.svg') }}" rel="apple-touch-icon"/>
		<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
		<div class="navbar-fixed @yield('body-class', '') w-nav">
			<div class="base-container w-container">
				<div class="nav-menu-wrapper white-menu">
					<a href="{{ route('home') }}" class="brand w-nav-brand">
                        @if(View::getSection('body-class') === 'without-bg')
                            <img src="{{ asset('img/logo-dark.svg') }}" loading="lazy" alt="Logo Oscuro" height="30" class="nav-logo"/>
                        @else
                            <img src="{{ asset('img/logo.svg') }}" loading="lazy" alt="Logo Claro" height="30" class="nav-logo"/>
                        @endif
                    </a>
					<nav role="navigation" class="nav-menu w-nav-menu">
						<div class="menu-wrap">
							<a href="{{ route('about') }}" class="nav-link white-menu w-nav-link">Nosotros</a>
                            <a href="{{ route('services') }}" class="nav-link white-menu w-nav-link">Servicios</a>
                            <a href="{{ route('location') }}" class="nav-link white-menu w-nav-link">Agencias</a>
                            <a href="{{ route('contact') }}" class="nav-link white-menu w-nav-link">Contactanos</a>
						</div>
					</nav>
					<div class="menu-button w-nav-button">
                    @if(View::getSection('body-class') === 'without-bg')
                        <img src="{{ asset('img/Burger_Button_Dark.png') }}" loading="lazy" alt="burger menu icon" height="16" class="image-burger"/>
                    @else
                        <img src="{{ asset('img/Burger_Button.png') }}" loading="lazy" alt="burger menu icon" height="16" class="image-burger"/>
                    @endif
                    </div>
                    <div class="w-nav-overlay">
                        <nav role="navigation" class="nav-menu w-nav-menu" data-nav-menu-open="">
                            <div class="tablet-menu">
                                <a href="/home-1" class="brand-tablet w-nav-brand">
                                    <img src="{{ asset('img/logo-dark.svg') }}" loading="lazy" alt="Logi 128 Dark Logo" height="30" class="nav-logo"></a>
                                <div class="close-menu-button w-nav-button w--open" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="true">
                                    <img src="{{ asset('img/x_icon.png') }}" loading="lazy" alt="" class="nav-close-icon">
                                </div>
                            </div>
                            <div class="menu-wrap">
                                <div class="nav-dropdown w-dropdown w--nav-dropdown-open" style="max-width: 1200px;">
                                <a href="{{ route('about') }}" class="nav-link white-menu w-nav-link w--nav-link-open" >Nosotros</a>
                                <a href="{{ route('services') }}" class="nav-link white-menu w-nav-link w--nav-link-open">Servicios</a>
                                <a href="{{ route('location') }}" class="nav-link white-menu w-nav-link w--nav-link-open">Agencias</a>
                                <a href="{{ route('contact') }}" class="nav-link white-menu w-nav-link w--nav-link-open">Contactanos</a>
                            </div>
                        </nav>
                    </div>
                </div>
			</div>
		</div>

        @yield('content')
	
		<div class="footer">
			<div class="p-container">
				<div class="footer-wrapper">
					<div class="footer-brand">
						<div class="footer-logo-container">
							<a href="{{ route('home') }}" class="nav-brand">
								<img src="http://popeyecargo.test/img/logo.svg" loading="lazy" alt="Logo" class="footer-logo">
							</a>
							<p class="footer-description">
								Empresa De Transporte Con Experiencia Brindando Eficiencia En El Servicio Del Traslado De Mercaderia
							</p>
						</div>
					</div>
					<div class="footer-nav">
						<h2>Enlaces</h2>
						<div class="footer-link-container">
							<i class="fas fa-chevron-right"></i>
							<a href="{{ route('about') }}" class="footer-link">Nosotros</a>
						</div>
						<div class="footer-link-container">
							<i class="fas fa-chevron-right"></i>
							<a href="{{ route('services') }}" class="footer-link">Servicios</a>
						</div>
						<div class="footer-link-container">
							<i class="fas fa-chevron-right"></i>
							<a href="{{ route('location') }}" class="footer-link">Agéncias</a>
						</div>
						<div class="footer-link-container">
							<i class="fas fa-chevron-right"></i>
							<a href="{{ route('contact') }}" class="footer-link">Contáctanos</a>
						</div>
					</div>

					<div class="footer-contact">
						<h2>Contacto</h2>
						<div>
							<i class="fas fa-map-marker-alt"></i>
							<p class="footer-location">
								<a href="{{ route('location') }}">Ver Agencias</a></p>
						</div>
						<div>
							<i class="fas fa-phone-alt"></i>
							<p class="footer-number">+51 988 069 143</p>
						</div>
						<div>
							<i class="fas fa-envelope"></i>
							<a href="mailto:contacto@popeyecargo.com" class="footer-email">contacto@popeyecargo.com</a>
						</div>
					</div>

					<div class="footer-conditions">
						<h2>Condiciones</h2>
						<p>Revisa nuestras <a href="#" class="footer-link">Políticas del servicio</a>, Preguntas Frecuentes y nuestro Calendario de Eventos. Puedes revisar nuestras <a href="#" class="footer-link">Políticas de privacidad</a>, establecidas para la protección de tu información.</p>
					</div>
				</div>
				<div class="footer-copy-wrapper">
					<div class="footer-copyright">
						© {{ config('app.name') }} © {{ now()->year }}. Todos los derechos reservados
					</div>
				</div>
			</div>
		</div>
		<div class="whatsapp-container">
			<a href="https://api.whatsapp.com/send?phone=51988069143&text=Hola%20PopeyeCargos,%20tengo%20una%20consulta." target="_blank" class="whatsapp-button">
				<img src="{{ asset('img/whatsapp-icon.png') }}" alt="WhatsApp" class="whatsapp-icon">
			</a>
			<div class="whatsapp-text">¡Chatea con nosotros!</div>
		</div>			
		<script src="{{ asset('js/jquery.js') }}" type="text/javascript" crossorigin="anonymous"></script>
        <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
		<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
	</body>
</html>