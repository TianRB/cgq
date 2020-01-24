<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Cirujano General en Veracruz / Dr. José Manuel Luna Vázquez</title>
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:200,200i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '509633333104433');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=509633333104433&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>
<body>

<!--------------------- ABRE HEADER --------------------->
<header class="header-principal">
	<div class="wrapt">
		<div class="logo"><img src="{{ asset('img/logo-cgq.png') }}" alt=""></div>
		<section class="btn-menu">
			<div class="barrita"></div>
			<div class="barrita"></div>
			<div class="barrita"></div>
		</section>
		<nav class="menu-principal">
			<ul>
				<li class="btn-cirugia-general">Cirugía general</li>
				<li class="btn-padecimientos-clinicos">Padecimientos clínicos</li>
				<li class="pagina-actual"><a href="{{ url('/') }}">Acerca de mi</a></li>
				<li><a href="{{ url('/blog') }}"> Blog</a></li>
				<li><a href="{{ url('/contacto') }}"> Contacto</a></li>
			</ul>
		</nav>
		<div class="contacto-header">
			<span class="icon-tel"> <p> (229) 9315731 / (229) 1428789</p></span>
			<span class="icon-whats"> <p> (229)1724253</p></span>
			<a href="https://www.instagram.com/drlunavazquez/?hl=es-la" target="_blank"><span class="icon-instagram"></span></a>
			<a href="https://www.facebook.com/drjosemanuelcirugia/?epa=SEARCH_BOX" target="_blank"><span class="icon-facebook"></span></a>
		</div>
		<nav class="submenu submenu-uno">
			<ul>
				<div class="back"> Regresar </div>
				<li><a href="{{ url('/cirugia-general/extraccion-lipomas') }}"> Extracción de lipomas</a></li>
				<li><a href="{{ url('/cirugia-general/apendicectomia') }}"> Apendicectomía</a></li>
				<li><a href="{{ url('/cirugia-general/colecistectomia') }}"> Colecistectomía</a></li>
				<li><a href="{{ url('/cirugia-general/exploracion-vias-biliares') }}"> Exploración de vías biliares</a></li>
				<li><a href="{{ url('/cirugia-general/resecciones-colonicas') }}"> Resecciones colónicas</a></li>
				<li><a href="{{ url('/cirugia-general/reconexiones-intestinales') }}"> Reconexiones intestinales</a></li>
				<li><a href="{{ url('/cirugia-general/hernias-abdominales') }}"> Hernias abdominales, umbilicales o inguinales</a></li>
				<li><a href="{{ url('/cirugia-general/amputaciones') }}"> Amputaciones</a></li>
				<li><a href="{{ url('/cirugia-general/trauma-abdominal') }}"> Trauma abdominal</a></li>
				<li><a href="{{ url('/cirugia-general/cirugia-antirreflujo') }}"> Cirugía antirreflujo</a></li>
				<li><a href="{{ url('/cirugia-general/cirugia-acalasia') }}"> Cirugía de acalasia</a></li>
				<li><a href="{{ url('/cirugia-general/extraccion-bazo') }}"> Extracción de bazo</a></li>
				<li><a href="{{ url('/cirugia-general/cirugia-glandula-tiroides') }}"> Cirugía de glándula tiroides</a></li>
				<li><a href="{{ url('/cirugia-general/pie-diabetico') }}"> Pie diabéticos</a></li>
				<li><a href="{{ url('/cirugia-general/heridas-cronicas') }}"> Heridas crónicas</a></li>
				<li><a href="{{ url('/cirugia-general/padecimientos-anorrectales') }}"> Padecimientos anorrectales</a></li>
				<li><a href="{{ url('/cirugia-general/deteccion-oportuna') }}"> Detección oportuna de cáncer de tubo digestivo</a></li>
				<li><a href="{{ url('/cirugia-general/tratamiento-ulceras') }}"> Tratamiento de úlceras por decúbito</a></li>
				<li><a href="{{ url('/cirugia-general/drenaje-tratamiento-infecciones') }}"> Drenaje y tratamiento de infecciones y abscesos en tejidos blandos</a></a></li>
			</ul>
		</nav>
		<nav class="submenu submenu-dos">
			<ul>
				<div class="back"> < Regresar </div>
				<li><a href="{{ url('/padecimientos-clinicos/enfermedades-esofagicas') }}"> Enfermedades esofágicas</a></li>
				<li><a href="{{ url('/padecimientos-clinicos/enfermedades-gastricas') }}"> Enfermedades gástricas</a></li>
				<li><a href="{{ url('/padecimientos-clinicos/enfermedades-intestino-delgado') }}"> Enfermedades del intestino delgado</a></li>
				<li><a href="{{ url('/padecimientos-clinicos/enfermedades-colonicas') }}"> Enfermedades colónicas</a></li>
				<li><a href="{{ url('/padecimientos-clinicos/enfermedades-higado') }}"> Enfermedades del hígado</a></li>
				<li><a href="{{ url('/padecimientos-clinicos/enfermedades-vesicula-vias-biliares') }}"> Enfermedades de la vesícula y vías biliares</a></li>
				<li><a href="{{ url('/padecimientos-clinicos/enfermedades-pancreaticas') }}"> Enfermedades pancreáticas</a></li>
				<li><a href="{{ url('/padecimientos-clinicos/enfermedades-bazo') }}"> Enfermedades del bazo</a></li>
				<li><a href="{{ url('/padecimientos-clinicos/enfermedades-intestino-irritable') }}"> Enfermedades del intestino irritable</a></li>
			</ul>
		</nav>
	</div>
</header>
<!--------------------- CIERRA HEADER --------------------->

<!--------------------- ABRE CONTENEDOR GENERAL --------------------->
<main class="main-index main-general">
	<div class="contenedor-circulo">

		<section class="circulos">
		</section>
	</div>

		@yield('content')

	</main>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous">  
</script>	
 <script src="{{ asset('js/script.js') }}"></script>
 <script src="{{ asset('js/validacion.js') }}"></script>
<script>
  $('.toggle').click(function(e) {
  	e.preventDefault();
  
    var $this = $(this);
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.parent().parent().find('li .inner').removeClass('show');
        $this.parent().parent().find('li .inner').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});
  </script>
</body>
</html>