$(document).ready(function(){
	$('#recibir-valoracion').click(function(){
		if(validaText("nombre_form_dos","nombre")==false)return false;
		if(validaEmail("correo_form_dos","e-mail")==false)return false;
		if(validaNumero("telefono_form_dos","número de teléfono")==false)return false;
		if(validaHorario("horario_form_dos","horario")==false)return false;
		$.ajax({
			type:'POST',
			url:'js/envio.php',
			data: $('#formulario-agenda-dos').serialize(),
		
			
			success:function(data){
			
					window.location.href = "http://cirujanoveracruz.com/gracias.html";
			}
		});
			
	});


});

function validaText(texto,salida)
{
	if($('#'+texto).val()=="")
	{
		$(".primerli .error").fadeIn(500);
		$('#'+texto).focus();
		return false;
	}else{
		$(".error").fadeOut(500);
	}
}



function validaEmail(email,salida)
{
	var correoelectronico = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	
	if($('#'+email).val()=="")
	{
		$(".segundoli .error").fadeIn(500);
		$('#'+email).focus();
		return false;
	}else{
		if(!correoelectronico.test($('#'+email).val()))
		{
		$(".segundoli .error").fadeIn(500);
		$(".segundoli .error").text("Este "+salida+ " no es válido...");
		$('#'+email).focus();
		return false;
		}
	}
}


function validaNumero(numero,salida)
{
	var num_parse=parseInt($('#'+numero).val());
	if($('#'+numero).val()=="")
	{
		$(".tercerli .error").fadeIn(500);
		$('#'+numero).focus();
		return false;
	}else{
		if(isNaN(num_parse))
		{
		$(".tercerli .error").fadeIn(500);
		$(".tercerli .error").text("Por favor ingrese un "+salida+ " para validar el campo");
		$('#'+numero).focus();
		return false;
		}
	}
}



function validaHorario(texto,salida)
{
	if($('#'+texto).val()=="")
	{
		$(".primerli .error").fadeIn(500);
		$('#'+texto).focus();
		return false;
	}else{
		$(".error").fadeOut(500);
	}
}



$(document).ready(function(){
	$('#recibir-valoracion-uno').click(function(){
		if(validaText("nombre_form","nombre")==false)return false;
		if(validaEmail("correo_form","e-mail")==false)return false;
		if(validaNumero("telefono_form","número de teléfono")==false)return false;
		if(validaHorario("horario_form","horario")==false)return false;
		
		$.ajax({
			type:'POST',
			url:'js/envio.php',
			data: $('#formulario-agenda-uno').serialize(),
		
			
			success:function(data){
			
					window.location.href = "http://cirujanoveracruz.com/gracias.html";
			}
		});
			
	});


});

function validaText(texto,salida)
{
	if($('#'+texto).val()=="")
	{
		$(".primerli .error").fadeIn(500);
		$('#'+texto).focus();
		return false;
	}else{
		$(".error").fadeOut(500);
	}
}



function validaEmail(email,salida)
{
	var correoelectronico = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	
	if($('#'+email).val()=="")
	{
		$(".segundoli .error").fadeIn(500);
		$('#'+email).focus();
		return false;
	}else{
		if(!correoelectronico.test($('#'+email).val()))
		{
		$(".segundoli .error").fadeIn(500);
		$(".segundoli .error").text("Este "+salida+ " no es válido...");
		$('#'+email).focus();
		return false;
		}
	}
}


function validaNumero(numero,salida)
{
	var num_parse=parseInt($('#'+numero).val());
	if($('#'+numero).val()=="")
	{
		$(".tercerli .error").fadeIn(500);
		$('#'+numero).focus();
		return false;
	}else{
		if(isNaN(num_parse))
		{
		$(".tercerli .error").fadeIn(500);
		$(".tercerli .error").text("Por favor ingrese un "+salida+ " para validar el campo");
		$('#'+numero).focus();
		return false;
		}
	}
}



function validaHorario(texto,salida)
{
	if($('#'+texto).val()=="")
	{
		$(".primerli .error").fadeIn(500);
		$('#'+texto).focus();
		return false;
	}else{
		$(".error").fadeOut(500);
	}
}
