$(document).ready(menu);
$(document).ready(subMenu);
$(document).ready(subMenuPadecimientos);
$(document).ready(subMenuDesktopUno);
$(document).ready(subMenuDesktopDos);
$(document).ready(btnMenuContacto);



function btnMenuContacto(){

	$(".btns-contacto div").click(function(){
		$(".btn-contacto-activo").removeClass("btn-contacto-activo")
		$(this).addClass("btn-contacto-activo")
	})

	$("#btn-precio").click(function(){
		$(".precios").addClass("contacto-activo")
		$(".ubicacion, .formulario-otro-tema, .formulario-agendar ").removeClass("contacto-activo")
	})
	$("#btn-ubicacion").click(function(){
		$(".ubicacion").addClass("contacto-activo")
		$(".precios, .formulario-otro-tema, .formulario-agendar ").removeClass("contacto-activo")
	})
	$("#btn-agenda").click(function(){
		$(".formulario-agendar").addClass("contacto-activo")
		$(".ubicacion, .formulario-otro-tema, .precios").removeClass("contacto-activo")
	})
	$("#btn-otro-tema").click(function(){
		$(".formulario-otro-tema").addClass("contacto-activo")
		$(".ubicacion, .formulario-agendar, .precios ").removeClass("contacto-activo")
	})

}







function menu(){
	$(".btn-menu").click(function(){
		if ($(".btn-menu").hasClass("menu-activo")) {
			$(".btn-menu").removeClass("menu-activo")
			$(".contenedor-circulo").removeClass("conenedor-circulo-activo");
			$(".circulos").removeClass("circulo-activo");
			$(".submenu").removeClass("submenu-activo")
			$("nav, .contacto-header").fadeOut();
			
		}else{
				$(".btn-menu").addClass("menu-activo")
				$(".menu-abierto").addClass("menu-abierto-activo")
				$(".contenedor-circulo").addClass("contenedor-circulo-activo");
				$(".circulos").addClass("circulo-activo");
				$("nav, .contacto-header").fadeIn(1000);
				
			}
	})
}

function subMenu(){
	$(".btn-cirugia-general").click(function(){
		$(".submenu-uno").addClass("submenu-activo")
	})
	$(".btn-padecimientos-clinicos").click(function(){
		$(".submenu-dos").addClass("submenu-activo")
	})
	$(".back").click(function(){
		$(".submenu").removeClass("submenu-activo")
	})
}


function subMenuDesktopUno(){
	$(".btn-cirugia-general, .submenu-uno").hover(function(){
		$(".submenu-uno").css("display" ,"block")
	}, function(){
		$(".submenu-uno").css("display" ,"none")	
	});
};

function subMenuDesktopDos(){
	$(".btn-padecimientos-clinicos, .submenu-dos").hover(function(){
		$(".submenu-dos").css("display" ,"block")
	}, function(){
		$(".submenu-dos").css("display" ,"none")	
	});
};



function subMenuPadecimientos(){
	$(".nav-descripcion-padecimiento li").click(function(){
		$(".nav-descripcion-elegido").removeClass("nav-descripcion-elegido")
		$(this).addClass("nav-descripcion-elegido")
		$(".visible").removeClass("visible")
	})

	$(".btn-sintomas").click(function(){
		$(".sintomas").addClass("visible")
	})
	$(".btn-causas").click(function(){
		$(".causas").addClass("visible")
	})
	$(".btn-tratamiento").click(function(){
		$(".tratamiento").addClass("visible")
	})

}















