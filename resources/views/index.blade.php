<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta name="description" content="Multicines Cinestar es una empresa pionera en el formato de multicines en el Perú. Información de películas, estrenos, concursos y más">
		<link rel="shortcut icon" href="{{ asset( 'img/varios/favicon.ico') }}">
		<link href="{{ asset( 'css/estilos.css' ) }}" rel="stylesheet" type="text/css">
		<title>Multicines Cinestar</title>
	</head>
	<body>

		<header>
			<nav class="nav-sec">
        		<a href="/">Inicio</a>&nbsp;&nbsp;l&nbsp;&nbsp;
        		<a href="http://www.cinestar.com.pe/quienes_somos">Quiénes somos</a>&nbsp;&nbsp;l&nbsp;&nbsp;
        		<a href="http://www.cinestar.com.pe/trabaja_con_nosotros">Trabaja con nosotros</a>&nbsp;&nbsp;l&nbsp;&nbsp;
        		<a href="https://www.efact.pe/consult.html" target="_blank">Consulta tu comprobante de pago </a>&nbsp;&nbsp;l&nbsp;&nbsp;
        		<a href="http://www.cinestar.com.pe/contactenos/#contenido_titulo" class="anchorLink">Contáctenos</a>
			</nav>
			<div class="area-logo">
				<a href={{ url('/') }}><img src="{{ asset( 'img/varios/logo-cinestar.png') }}" alt="Cinestar"/></a>
			</div>
			<nav class="menu">
				<span class="img-social">
					<a href="http://www.facebook.com/multicinestar" target="_blank"><img src="{{ asset('img/varios/ico-face.png') }}"/></a>
					<a href="http://www.twitter.com/multicinestar" target="_blank"><img src="{{ asset('img/varios/ico-twitter.png') }}"/></a>
				</span>
				<span class="social">Síguenos en: </span>
				<ul class="menu-principal">
		    		<li class="menu-item"><a href="/peliculas/cartelera">Cartelera</a></li>
		       		<li class="menu-item"><a href="/peliculas/estrenos">Próximos estrenos</a></li>
		       		<li class="menu-item"><a href="http://www.cinestar.com.pe/starcard">Star Card</a></li>
		        	<li class="menu-item"><a href={{ route( 'cines')}}>Nuestros Cines</a></li>
		        	<li class="menu-item"><a href="http://www.cinestar.com.pe/ventas_corporativas">Ventas Corporativas</a></li>
		        	<li class="menu-item"><a href="http://www.cinestar.com.pe/promociones">Promociones</a></li>
		        	<li class="menu-item"><a href="http://www.cinestar.com.pe/cinefilo_star">Blog</a></li>
		    	</ul>
			</nav>
			<div class="slider">

			</div>
			<div class="papaya">
				<a href="http://www.cinepapaya.com/pe/cinestar" target="_blank"><img src="{{ asset('img/varios/bg-papaya.jpg') }}"/></a>
			</div>
		</header>
	
		<div class="contenido">
			<div class="publicidad">
				<a href="http://www.cinestar.com.pe/starcard/"><img src="{{ asset('img/varios/starcard.jpg') }}"/></a>
				<a href="http://www.cinestar.com.pe/cinefilo_star/"><img src="{{ asset('img/varios/cinefilo-star.jpg') }}"/></a>
			</div>
			<div class="contenido-interno" id="contenido-interno">
				
				@yield('contenido_interno')
					
				
			</div>
		</div>
		<div class="clearbox"><br/></div>

		<footer>
			<div class="contenido-footer">
				<p>Copyright © 2016 ® Multicines CINESTAR - Todos los Derechos Reservados</p>
			</div>
		</footer>

	</body>
</html>