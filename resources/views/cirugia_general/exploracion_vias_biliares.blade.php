@extends('layouts.app')
@section('content')

	<!--------------------- ABRE SLIDE --------------------->
	<section class="slide-servicios">
		<div class="texto-slide">
			<div>
				<h1>Exploración de vías biliares</h1>
				<p>No más cálculos biliares</p>
				<p>agenda hoy y obtén un <br><strong>¡descuento en tu primer consulta!</strong></p>
			</div>
		</div>
		<figure><img src="../img/portada-exploracion-vias-biliares.jpg" alt=""></figure>
	</section>
	<!--------------------- CIERRA SLIDE --------------------->

	<!--------------------- ABRE PRIMER FORMULARIO --------------------->
	<form action="" class="formulario-agenda" id="formulario-agenda-uno">
				<h3>Agenda tu consulta en un instante</h3>
				<ul>
					<li><input type="text" placeholder="Nombre y apellido" id="nombre_form" name="nombre" required></li>
				<li><input type="text" placeholder="Correo" id="correo_form" name="correo" required></li>
				<li><input type="text" placeholder="Teléfono" id="telefono_form" name="telefono" required></li>
					<li>
					<select id="horario_form" name="horario">
						<option>Qué día te gustaría asistir a tu consulta</option>
						<option>Lunes entre 16:00 y 20:00 hrs</option>
						<option>Martes entre 16:00 y 20:00 hrs</option>
						<option>Miércoles entre 16:00 y 20:00 hrs</option>
						<option>Jueves entre 16:00 y 20:00 hrs</option>
						<option>Viernes entre 16:00 y 20:00 hrs</option>
						<option>Sábado entre 11:00 y 13:00 hrs</option>
					</select>
				</li>
					<div class="btn-agendar" id="recibir-valoracion-uno">¡Agenda tu cita!</div>
				</ul>
			</form>

	<!--------------------- CIERRA SEGUNDO FORMULARIO --------------------->
	

	<!--------------------- ABRE DESCRIPCIÓN CIRUGÍA --------------------->
	<section class="descripcion-cirugia">
		<div class="wrapt-descripcion-cirugia">
			<div class="video">
				<img src="../img/servicios/exploracion-vias-biliares.jpg" alt="">
			</div>
			<div class="texto-descripcion-cirugia">
				<h2>¿Qué es la exploración de vías biliares?</h2>
				<p>Esta cirugía consiste en el abordaje de la vía biliar principal (colédoco) cuándo hay la existencia de una obstrucción de este conducto frecuentemente por cálculos formados en la vesícula biliar, enfermedad llamada coledocolitiasis. </p>
			</div>
		</div>
	</section>
	<!--------------------- CIERRA DESCRIPCIÓN CIRUGÍA --------------------->


	<!--------------------- ABRE DESCRIPCIÓN CIRUGÍA --------------------->
	<section class="beneficios-cirugia">
		<div class="wrapt-beneficios-cirugia">
			<h2>Beneficios de la colecistectomía</h2>

			<article>
				<h3>Riesgos de no realizarse la operación.</h3>
				<p>Coloración amarilla de la piel (incremento de bilirrubina en la sangre).</p>
				<p>Ante una herida, retraso en el tiempo de coagulación.</p>
				<p>Infección de las vías biliares (pus en la bilis).</p>
				<p>Fiebre y malestar general.</p>
				<p>Datos de daño hepático (cuando la atención se ha retrasado mucho).</p>
			</article>
			<article>
				<h3>Tratamiento</h3>
				<p>Cirugia Abierta.</p>
				<p>Cirugia 2 en 1  (2 procedimientos de mínima invasión en 1 sólo tiempo quirúrgico).</p>
				<p>Retiro de piedra en vía biliar por endoscopia (CPRE) y Colecistectomía Laparoscópica.</p>
			</article>
			<article>
				<h3>Beneficios de realizarse la operación</h3>
				<p>La extirpación de la vesícula biliar aliviará el dolor, tratará la infección y, en la mayoría de los casos, impedirá que se vuelvan a formar los cálculos biliares. Si no tiene complicaciones, normalmente se irá a su casa un día después de una cirugía por laparoscopia, o en 1 a 2 días después de una cirugía abierta.</p>
			</article>
		</div>
	</section>
	<!--------------------- CIERRA DESCRIPCIÓN CIRUGÍA --------------------->


	<!--------------------- ABRE PAQUETES --------------------->
	 <section class="paquetes-quirurgicos">
		<div class="wrapt-paquetes-quirurgicos">
			
			<div class="hospitales-financiadoras">
				<article>
					<h3>Hospitales</h3>
					<div class="logos">
						<img src="../img/logo-star-medica.jpg" alt="">
						<img src="../img/logo-dmaria.jpg" alt="">
						<img src="../img/logo-hospital-espanol.jpg" alt="">
						<img src="../img/logo-hospital-solferino.jpg" alt="">
						<img src="../img/logo-clinica-pheani.png" alt="">
					</div>
				</article>
				<article>
					<h3>Financiadoras</h3>
					<div class="logos">
						<img src="../img/logo-alivio.jpg" alt="">
						<img src="../img/logo-salud-facil.jpg" alt="">
					</div>
				</article>
			</div>

			
		</div>
	</section> 
	<!--------------------- CIERRA PAQUETES --------------------->




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
