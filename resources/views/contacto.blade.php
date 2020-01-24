@extends('layouts.app')
@section('content')

	<!--------------------- ABRE SLIDE --------------------->
	<section class="contacto">
		<div class="wrapt-contacto">
			<div class="texto-contacto">
				<h1>¿Cómo podemos ayudarte?</h1>
				<p>Las recomendaciones médicas o diagnósticos, sólo se emitene en consulta, misma que también puedes agendar aquí.</p>
			</div>
			<div class="btns-contacto">
				<div id="btn-agenda" class="btn-contacto-activo">Agendar</div>
				<div id="btn-precio">Precios</div>
				<div id="btn-ubicacion">Ubicación</div>
				<div id="btn-otro-tema">Otro tema</div>
			</div>
			<div class="contenido-contacto">
				<div class="ubicacion  contacto-desactivo">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.257901098477!2d-96.13291088509715!3d19.183934787026068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c346ca629beb83%3A0x352140df42e847fa!2sGrupo%20M%C3%A9dico%20Mater!5e0!3m2!1ses!2smx!4v1567700897098!5m2!1ses!2smx" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					<div class="datos-ubicacion">
						<p>Juan Enriquez 970</p>
						<p>Col. Ignacio Zaragoza</p>
						<p>Veracruz Llave, Veracruz-Llave, Mexico</p>
						<br>
						<p>* Tel: (229) 9315731 / (229) 1428789</p>
						<p>* Urgencias: (229) 9066540</p>
						<p>* WhatsApp para citas: (229)1724253</p>
						<p>* drlunavazquez@yahoo.com</p>
					</div>
					
				</div>
				<div class="precios contacto-desactivo">
					<h2>Precio de consulta</h2>
					<p>El costo de la consulta es de $700.00, si agendas dentro de este mes tendrás el 15% de descuento en tu primer consulta.</p>
					<br>
					<h2>Precio de cirugías</h2>
					<p>El precio de cada cirugía varía. Sin embargo contamos con diferentes paquetes y financiamientos para brindar comodidades de pago.Para conocer el precio de algún procedimiento en específico te invitamos a marcar en los números que aparecen en la parte superior de la pantalla.</p>
				</div>


				<!--------------------- ABRE PRIMER FORMULARIO --------------------->
				<form action="" class="formulario-agenda-contacto formulario-agendar contacto-desactivo contacto-activo">
					<h3>Agenda tu consulta en un instante</h3>
					<ul>
						<li><input type="text" placeholder="Nombre y apellido"></li>
						<li><input type="text" placeholder="Correo"></li>
						<li><input type="text" placeholder="Teléfono"></li>
						<li><input type="text" placeholder="Día y hora de preferencia"></li>
						<div class="btn-agendar">¡Agenda tu cita!</div>
					</ul>
				</form>
				<!--------------------- CIERRA SEGUNDO FORMULARIO --------------------->
				<!--------------------- ABRE PRIMER FORMULARIO --------------------->
				<form action="" class="formulario-agenda-contacto formulario-otro-tema contacto-desactivo">
					<h3>Si tienes alguna duda que no aparezca resuelta en la sección de nuestras preguntas frecuentes en la parte inferior de la página, escríbenos y nos pondremos en contacto contigo a la brevedad posible para resolverla.</h3>
					<ul>
						<li><input type="text" placeholder="Nombre y apellido"></li>
						<li><input type="text" placeholder="Correo"></li>
						<li><input type="text" placeholder="Teléfono"></li>
						<li class="textarea"><textarea name="" id="" cols="30" rows="10" placeholder="¿Cómo podemos ayudarte?"></textarea></li>
						<div class="btn-agendar">¡Agenda tu cita!</div>
					</ul>
				</form>
				<!--------------------- CIERRA SEGUNDO FORMULARIO --------------------->
			</div>
		</div>
	</section>
	<!--------------------- CIERRA SLIDE --------------------->



	

	


</main>
<!--------------------- CIERRA CONTENEDOR GENERAL --------------------->



@endsection
