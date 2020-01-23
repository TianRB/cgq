@extends('layouts.app')

@section('content')

	<!--------------------- ABRE SLIDE --------------------->
	<section class="slide">
		<div class="texto-slide">
			<div>
				<h1>Especialista en cirugía general y gastroenterología</h1>
				<p>Dr. José Manuel Luna Vázquez</p>
				<a href=""><div class="agenda">¡Agenda tu cita hoy!</div></a>
			</div>
		</div>
		<figure><img src="{{ asset('img/dr-luna-3.jpg') }}" alt=""></figure>
	</section>
	<!--------------------- CIERRA SLIDE --------------------->



	<!--------------------- ABRE SECCIÓN FORMACIÓN --------------------->
	<div class="fondo-luna"></div>
	<section class="dr-luna-perfil">
		<div class="wrapt">
			<figure><img src="{{ asset('img/dr-luna-perfil.jpg') }}" alt=""></figure>
			<div>
				<h2>“Con mi continua actualización, ofrezco a mis pacientes la calidad médica  y de vida, que ellos merecen”</h2>
				<ul>
					<h3>Formación</h3>
					<li>Cédula Profesional: 6484529</li>
					<li>Cédula de Especialidad: 9858495</li>
					<li>Médico cirujano por la Universidad Nacional Autónoma de México</li>
					<li>Especialidad Universidad Veracruzana</li>
					<li>Miembro activo de la Asociación Panamericana en Trauma, y del Colegio de Cirujanos Generales del estado de Veracruz.</li>
				</ul>
				
			</div>
		</div>
	</section>
	<!--------------------- CERRAR SECCIÓN FORMACIÓN --------------------->
	

	<!--------------------- ABRE SECCIÓN TRATAMIENTOS --------------------->
	<section class="servicios-index">
		<div>
			<h2>Tratamientos y procedimientos</h2>
			<ul>
				<p><strong>Cirugía general</strong></p>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/extraccion-lipomas.html">Extracción de lipomas</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/apendicectomia.html">Apendicectomía</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/colecistectomia.html">Colecistectomía</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/exploracion-vias-biliares.html">Exploración de vías biliares</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/resecciones-colonicas.html">Resecciones colónicas</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/reconexiones-intestinales.html">Reconexiones intestinales</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/hernias-abdominales-umbilicales-inguinales.html">Hernias abdominales, umbilicales o inguinales</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/amputaciones.html">Amputaciones</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/trauma-abdominal.html">Trauma abdominal</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/cirugia-antirreflujo.html">Cirugía antirreflujo</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/cirugia-acalasia.html">Cirugía de acalasia</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/extraccion-bazo.html">Extracción de bazo</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/cirugia-glandula-tiroides.html">Cirugía de glándula tiroides</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/pie-diabetico.html">Pie diabéticos</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/heridas-cronicas.html">Heridas crónicas</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/padecimientos-anorrectales.html">Padecimientos anorrectales</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/deteccion-oportuna-cancer-tubo-digestivo.html">Detección oportuna de cáncer de tubo digestivo</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/tratamiento-ulceras-por-decubito.html">Tratamiento de úlceras por decúbito</a></li>
				<li><a href="http://cirujanoveracruz.com/cirugia-general/drenaje-tratamiento-infecciones-abscesos-tejidos-blandos.html">Drenaje y tratamiento de infecciones y abscesos en tejidos blandos</a></a></li>
			</ul>
			<ul>
				<p><strong>Padecimientos clínicos</strong></p>
				<li><a href="http://cirujanoveracruz.com/padecimientos-clinicos/enfermedades-esofagicas.html">Enfermedades esofágicas</a></li>
				<li><a href="http://cirujanoveracruz.com/padecimientos-clinicos/enfermedades-gastricas.html">Enfermedades gástricas</a></li>
				<li><a href="http://cirujanoveracruz.com/padecimientos-clinicos/enfermedades-intestino-delgado.html">Enfermedades del intestino delgado</a></li>
				<li><a href="http://cirujanoveracruz.com/padecimientos-clinicos/enfermedades-colonicas.html">Enfermedades colónicas</a></li>
				<li><a href="http://cirujanoveracruz.com/padecimientos-clinicos/enfermedades-higado.html">Enfermedades del hígado</a></li>
				<li><a href="http://cirujanoveracruz.com/padecimientos-clinicos/enfermedades-vesicula-vias-biliares.html">Enfermedades de la vesícula y vías biliares</a></li>
				<li><a href="http://cirujanoveracruz.com/padecimientos-clinicos/enfermedades-pancreaticas.html">Enfermedades pancreáticas</a></li>
				<li><a href="http://cirujanoveracruz.com/padecimientos-clinicos/enfermedades-bazo.html">Enfermedades del bazo</a></li>
			</ul>
		</div>
	</section>
	<!--------------------- CIERRA SECCIÓN TRATAMIENTOS --------------------->

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
				<img src="{{ asset('img/agenda-cita.png') }}" alt="">
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
@endsection
