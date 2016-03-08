


/*
=================================================
FUNCIÓN PARA CONTROLAR EL POP UP DE LOS HORARIOS DE LOS LABORATOROS DE CADA EFICICIO
=================================================
*/
$(function(){
	$(".close-pop-up").click(function(){
		$(".pop-up-fade").hide(300);
	});

	$("span[role-action='lauch-modal']").click(function(){
		//Obtenemos el atributo del elemento pulsado
		var target = $(this).attr("data-target");
		$("div[data-rol='modal-" + target +"']").show(200);
	});
});



/*=========================================================================*/
/*Función para deslegar y ocultar el contenido del acordeon*/
/*=========================================================================*/
$(function(){
	$(".accordion-header").click(function(){
		var accordion = $(this);
		var accordionContent = accordion.next(".accordion-content");
		accordionContent.slideToggle(250);

		var accordionToggleIcon = $(this).children(".title");
		var father = accordionToggleIcon.children(".toggle-icon");

		accordion.toggleClass("open");

		if (accordion.hasClass("open")) {
			father.html(" <span class='icon-minus'>-</span> ");
			/*$(this).css("background","#7abd5f");*/
		} else {
			father.html(" <span class='icon-plus'>+</span> ");
			/*$(this).css("background","#d1d1d1");*/
		}
	});
});


/*=========================================================================*/
/*Función para fixear la barra del menú*/
/*=========================================================================*/
$(function(){
	$(window).scroll(function(){
		if($(this).scrollTop() > 0 ){
			$('.header').css({'position': 'fixed', 'top': '0px','z-index': '10'});
			$("div[data-rol='search-container']").css({'z-index': '10','box-shadow': '0 1px 1px gris-oscuro', 'position': 'fixed', 'left': '0', 'right': '0', 'top': '60px'});  
		}else{
			$('.header').css({'position': 'relative', 'top': 'auto'});
			$("div[data-rol='search-container']").css({'position': 'relative', 'top': 'auto'});
		}
	});
});

/*=========================================================================*/
/*Función para detectar si se está haciendo scroll y mostrar el gif loading*/
/*=========================================================================*/
$(window).scroll(function() {
	$("#gif-loading").show(200);
	clearTimeout( $.data( this, "TestScroll" ) );
	$.data( this, "TestScroll", setTimeout(function() {
		/*$("#gif-loading").hide(200);*/
		$("#gif-loading").append("<span class='badge green block mc-button mc-button-block yellow center'>No hay más publicaciones por ahora.</span>");
	}, 250) );
});

/*=========================================================================*/
/*Función para aparecer o desparecer el menú de navegacvion*/
/*=========================================================================*/
$(function() {
	status = 0;
	$(".toogle-menu").click(function(){
		if(status == 0){
			$("#menu").slideDown(200);
			status = 1;
		}else{
			$("#menu").slideUp(200);
			status = 0;
		}
	});
	
});

/*=========================================================================*/
/*Función para aparecer o desparecer el menú flotante de lado izquierdo*/
/*=========================================================================*/
$(function() {
	status = 0;
	$("#toggle-float-panel").click(function(){
		if(status == 0){
			$("#float-panel").toggle(200);
			status = 1;
		}else{
			$("#float-panel").toggle(200);
			status = 0;
		}
	});
	
});


/*=========================================================================*/
/*Función para setear el alto de la prsentacion al alto de la pantalla al 100% en modo desktop*/
/*=========================================================================*/
$(function(){
	var altoVentana = $(window).height();
	var altoHeader = $("header").height();
	var altoFooter = $("footer").height();
	var restaTotal = altoHeader + altoFooter;


	if ((screen.width >= 768)) {
		$("#presentation").css("height", altoVentana - 60);
		$("#float-panel").css("height", altoVentana - altoHeader);
	}
});

/*=========================================================================*/
/*Función para cerrar las alertas*/
/*=========================================================================*/
$(function(){
	$(".alert-close").click(function(){
		$(this).parent().slideUp(300);
	});
});


/*=========================================================================*/
/*Función para devolver el tiempo transcurrido desde una fecha en una sola unidad de tiempo. DEPRECATED*/
/*=========================================================================*/
function timeSince(date) {

	var seconds = Math.floor((new Date() - date) / 1000);

	var interval = Math.floor(seconds / 31536000);

	if (interval > 1) {
		return interval + " years";
	}
	interval = Math.floor(seconds / 2592000);
	if (interval > 1) {
		return interval + " months";
	}
	interval = Math.floor(seconds / 86400);
	if (interval > 1) {
		return interval + " days";
	}
	interval = Math.floor(seconds / 3600);
	if (interval > 1) {
		return interval + " hours";
	}
	interval = Math.floor(seconds / 60);
	if (interval > 1) {
		return interval + " minutes";
	}
	return Math.floor(seconds) + " seconds";
}


/*=========================================================================*/
/*Función para comprobar si dos contraseñas son iguales al cambiar*/
/*=========================================================================*/
$(function() {

	$("input[type='password']").keyup(function(){
		var clave_uno = $("#clave_uno").val();
		var clave_dos = $("#clave_dos").val();

		var espacios = false;
		var cont = 0;

		while (!espacios && (cont < clave_uno.length)) {
			if (clave_uno.charAt(cont) == " ")
				espacios = true;
			cont++;
		}

		if (espacios) {
			$(".alert").empty();
			$(".alert").show(300);
			$(".alert").html("<p class='description'>Las claves no pueden tener espacios.</p>");
			$("#clave_uno").focus();
			return false;
		}else{
			if(clave_uno != clave_dos){
				$(".alert").empty();
				$(".alert").show(300);
				$(".alert").html("<p class='description'>Las claves no coinciden.</p>");
			}
		}

	});

});


/*
=================================================
FUNCIÓN PARA Comprobar la seguridad de una contraseña
=================================================
*/
$(function(){
	$("#clave_uno").keyup(function(e) {
		var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$", "g");
		var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
		var enoughRegex = new RegExp("(?=.{6,}).*", "g");
		if (false == enoughRegex.test($(this).val())) {
			$(".alert").html("<p class='description'>Muy pequeña</p>");
			$(".alert").attr("alert-type").val("danger");
		} else if (strongRegex.test($(this).val())) {
			$(".alert").className = "ok";
			$(".alert").html("<p class='description'>media.</p>");
			$(".alert").attr("info");
		} else if (mediumRegex.test($(this).val())) {
			$(".alert").className = "alert";
			$(".alert").html("<p class='description'>normal.</p>");
			$(".alert").attr("success");
		} else {
			$(".alert").className = "error";
			$(".alert").html("<p class='description'>Bien.</p>");
		}
		return true;
	});
});
