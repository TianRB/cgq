@extends('layouts.app')
@section('content')

	<!--------------------- ABRE DESCRIPCIÓN CIRUGÍA --------------------->
	<section class="slide-padecimiento">
		<div class="wrapt-slide-padecimiento">
			<div class="texto-slide-padecimiento">
				<h1>Enfermedades de la vesícula y vías biliares</h1>
				<p>Hay múltiples enfermedades a este nivel aunque las más comunes son los cálculos o litos en la vesícula biliar o vías biliares, disquinesia vesicular (alteración en el vaciamiento de la bilis), espasmo del esfínter de Oddi, cáncer de vesícula o vías biliares.</p>
				<p>Agenda hoy y obtén un <br><strong>¡15% de descuento en tu primer consulta!</strong></p>
				<div class="btn-agenda">¡Agendar!</div>
			</div>
			<div class="video">
				<img src="../img/servicios/enfermedades-vesicula.jpg" alt="">
			</div>
			
		</div>
	</section>
	<!--------------------- CIERRA DESCRIPCIÓN CIRUGÍA --------------------->



	<!--------------------- ABRE PADECIMIENTOS --------------------->
	<section class="descripcion-padecimiento enfermedades-vesicula">
		<div class="wrapt-descripcion-padecimiento">
			<ul class="nav-descripcion-padecimiento">
				<li class="btn-sintomas nav-descripcion-elegido">Síntomas</li>
				<li class="btn-causas">Causas</li>
				<li class="btn-tratamiento">Tratamiento</li>
			</ul>
			<article>
				<div class="sintomas visible">
					<p>Es posible que los cálculos biliares no provoquen signos ni síntomas. Si un cálculo biliar se aloja en alguna vía y provoca una obstrucción, los signos y síntomas que esto produce pueden incluir los siguientes:</p>
					<ul>
						<li>Dolor repentino que se intensifica rápidamente en la parte superior derecha del abdomen.</li>
						<li>Dolor repentino que se intensifica rápidamente en el centro del abdomen, justo debajo del esternón.</li>
						<li>Dolor de espalda entre los omóplatos.</li>
						<li>Dolor en el hombro derecho.</li>
						<li>Náuseas o vómitos.</li>
					</ul>
				</div>
				<div class="causas">
					<p> No está claro por qué se forman los cálculos biliares. Los médicos creen que los cálculos biliares pueden producirse cuando sucede lo siguiente:</p>
					<ul>
						<li>La bilis contiene demasiado colesterol.</li>
						<li>La bilis contiene demasiada bilirrubina.</li>
						<li>Tu vesícula no se vacía correctamente.</li>
					</ul>
				</div>
				<div class="tratamiento">
					<p> La mayoría de las personas con cálculos biliares que no presentan síntomas nunca necesitarán tratamiento. El médico determinará si se recomienda algún tratamiento para los cálculos biliares, lo cual dependerá de tus síntomas y los resultados del análisis de diagnóstico. Las opciones de tratamiento para cálculos biliares incluyen lo siguiente:</p>
					<ul>
						<li>Cirugía para extraer la vesícula (colecistectomía).</li>
						<li>Medicamentos para mejorar el metabolismo de las sales biliares disminuyendo la probabilidad de formación de calculos biliares.</li>
					</ul>
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
