@extends('layouts.app')
@section('content')

	<!--------------------- ABRE DESCRIPCIÓN CIRUGÍA --------------------->
	<section class="slide-padecimiento">
		<div class="wrapt-slide-padecimiento">
			<div class="texto-slide-padecimiento">
				<h1>Enfermedades gástricas</h1>
				<p>Son las enfermedades que se originan en el estómago, las más comunes son la enfermedad ácido-péptica, gastritis, enfermedad por reflujo, várices gástricas, cáncer gástrico entre otras.</p>
				<p>Agenda hoy y obtén un <br><strong>¡15% de descuento en tu primer consulta!</strong></p>
				<div class="btn-agenda">¡Agendar!</div>
			</div>
			<div class="video">
				<img src="../img/servicios/enfermedad-gastrica.jpg" alt="">
				<!--<iframe src="https://www.youtube.com/embed/_eDiXfG38QE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
			</div>
			
		</div>
	</section>
	<!--------------------- CIERRA DESCRIPCIÓN CIRUGÍA --------------------->



	<!--------------------- ABRE PADECIMIENTOS --------------------->
	<section class="descripcion-padecimiento enfermedades-gastricas">
		<div class="wrapt-descripcion-padecimiento">
			<ul class="nav-descripcion-padecimiento">
				<li class="btn-sintomas nav-descripcion-elegido">Síntomas</li>
				<li class="btn-causas">Causas</li>
				<li class="btn-tratamiento">Tratamiento</li>
			</ul>
			<article>
				<div class="sintomas visible">
					<p>La gran mayoría se manifiesta con dolor de tipo ardoroso en la "boca del estómago" o sensación de vacío, distensión abdominal, nauseas, vómitos, reflujo, acidez y en estados avanzados evacuaciones negras u obscuras.</p>
				</div>
				<div class="causas">
					<ul>
						<li>Algunos fármacos, como ácido acetilsalicílico, naproxeno o ibuprofeno.</li>
						<li>Infección del estómago con la bacteria Helicobacter pylori.</li>
						<li>Abuso de alcohol o ingesta de sustancias corrosivas, como algún tipo de veneno.</li>
						<li>Ingesta de alimentos picantes.</li>
						<li>Fumar.</li>
						<li>Reflujo de bilis hacia el estómago o reflujo biliar.</li>
						<li>Trastornos autoinmunes.</li>
						<li>Infección viral, sobre todo en personas con déficits en el sistema inmunológico.</li>
						<li>Estrés excesivo.</li>
					</ul>
				</div>
				<div class="tratamiento">
					<p> Es probable que el médico te recomiende que primero realices modificaciones en el estilo de vida y tomes medicamentos de venta libre. Si no sientes alivio a las pocas semanas, el médico puede recomendarte realizar estudios de laboratorio, de imagenologia o cirugía, dependiendo de gravedad.</p>
				</div>
			</article>
			
		</div>
	</section>
	<!--------------------- CIERRA PADECIMIENTOS --------------------->





















	<!--------------------- ABRE CIERRE DE VENTAS --------------------->
	<section class="cierre-ventas">
		<div class="wrapt-cierre-ventas">
			<div class="texto-intro-paquetes">
				<h2>¿Aún tienes dudas?</h2>
				<p>Puedes consultar nuestra sección de preguntas frecuentes que está al final de está página. También puedes enviarnos un WhatsApp o marcanos a los teléfonos que aparecen en la parte superior de esta página.</p>
				<p>Agenda hoy y <strong>obtienes un 15% de descuento</strong> en tu consulta de valoración.</p>
			</div>
			
		
			<!--------------------- ABRE SEGUNDO FORMULARIO --------------------->
				<form action="" class="formulario-agenda" id="formulario-agenda-dos">
				<h3>Agenda tu consulta en un instante</h3>
				<ul>
					<li><input type="text" placeholder="Nombre y apellido" id="nombre_form_dos" name="nombre" required></li>
				<li><input type="text" placeholder="Correo" id="correo_form_dos" name="correo" required></li>
				<li><input type="text" placeholder="Teléfono" id="telefono_form_dos" name="telefono" required></li>
					<li>
					<select id="horario_form_dos" name="horario">
						<option>Qué día te gustaría asistir a tu consulta</option>
						<option>Lunes entre 16:00 y 20:00 hrs</option>
						<option>Martes entre 16:00 y 20:00 hrs</option>
						<option>Miércoles entre 16:00 y 20:00 hrs</option>
						<option>Jueves entre 16:00 y 20:00 hrs</option>
						<option>Viernes entre 16:00 y 20:00 hrs</option>
						<option>Sábado entre 11:00 y 13:00 hrs</option>
					</select>
				</li>
					<div class="btn-agendar" id="recibir-valoracion">¡Agenda tu cita!</div>
				</ul>
			</form>
			<!--------------------- CIERRA SEGUNDO FORMULARIO --------------------->
			<figure class="img-agenda-cita">
				<img src="../img/agenda-cita.png" alt="">
			</figure>
			<div class="preguntas-frecuentes">
				<h2>Preguntas frecuentes</h2>
				<ul class="accordion">
					<li>
				    	<a class="toggle" href="javascript:void(0);">¿Qué precio tiene la consulta?</a>
				    	<ul class="inner">
				      		<li>El costo de la consulta es de $700.00, si agendas dentro de este mes tendrás el 15% de descuento en tu primer consulta. </li>
				      		
				    	</ul>
					</li>
					<li>
				    	<a class="toggle" href="javascript:void(0);">¿Dónde se encuentran?</a>
				    	<ul class="inner">
				      		<li>Nos encontramos en Juan Enriquez 970, Col. Ignacio Zaragoza, Veracruz, Veracruz, Mexico</li>
				    	</ul>
					</li>
					<li>
				    	<a class="toggle" href="javascript:void(0);">¿Cómo agendo una cita?</a>
				    	<ul class="inner">
				      		<li>Puede agendar con nostros en nuestro sitio web, redes sociales o a cualquiera de los siguientes números:</li>
				      		<li>* Tel: (229) 9315731 / (229) 1428789</li>
							<li>* Urgencias: (229) 9066540</li>
							<li>* WhatsApp para citas: (229)1724253</li>
							<li>* drlunavazquez@yahoo.com</li>
				      		
				    	</ul>
					</li>
					<li>
				    	<a class="toggle" href="javascript:void(0);">¿Cómo los contacto?</a>
				    	<ul class="inner">
				      		<li>Puede ponerse en contacto con nosotros a través de este sitio web, redes sociales o a los siguientes números:</li>
				      		<li>* Tel: (229) 9315731 / (229) 1428789</li>
							<li>* Urgencias: (229) 9066540</li>
							<li>* WhatsApp para citas: (229)1724253</li>
							<li>* drlunavazquez@yahoo.com</li>
				    	</ul>
					</li>
					<li>
				    	<a class="toggle" href="javascript:void(0);">¿Tienes planes de pago?</a>
				    	<ul class="inner">
				      		<li>¡Claro! Trabajamos con diferentes financiadoras para poder brindarle a todos nuestros pacientes las facilidades de pago que más les convengan para poder recibir su procedimiento quirúrgico.</li>
				    	</ul>
					</li>
				</ul>
			</div>
		</div>
	</section>
	

			

	<!--------------------- CIERRA CIERRE DE VENTAS --------------------->



	
	

	



</main>
<!--------------------- CIERRA CONTENEDOR GENERAL --------------------->



@endsection
