/*
* Verrsión 1.0
* Autor
* Fecha
* Clase para enviar datos
*/

/*
===============================================================
Función para el parallax del fondo principal (DESACTIVADA POR AHORA)
===============================================================
*/
/*$(function(){
	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion =  (barra * 0.50);
		
		$("#presentation-image").css({
			"background-position": "0 -" + posicion + "px"
		});
		
	});
});*/

/*=========================================================================*/
/*Adtualizar foto de perfil*/
/*=========================================================================*/
$(function(){
	$("#actualiza_avatar").click(function(){
		var avatar = $("#input-avatar").val();
		
		$.ajax({
			url: "models/upload-avatar.php", 
			type: "POST",             
			data: avatar     
		}).done(function(info){
			alert("perfil actulizado");
		})
	});

});


/*=========================================================================*/
/*Uploader imagenes al momento*/
/*=========================================================================*/
/*$(function(){
	$("#uploadimage").on('submit',(function(e) {
		$("#message").empty();
		$('#loading').show();
		
		var data_image = $("#avatar_usuario").val();

		$.ajax({
			url: "models/update-user-avatar.php", 
			type: "POST",             
			data: data_image, 
			contentType: false,       
			cache: false,             
			processData:false,        
			success: function(data){
				$('#loading').hide();
				$("#message").html(data);
			}
		});
}));*/

// Function to preview image after validation
/*$(function() {
	$("#avatar_usuario").change(function() {
		$("#message").empty(); 
		var file = this.files[0];
		var imagefile = file.type;
		var match= ["image/jpeg","image/png","image/jpg"];
		if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
			$('#previewing').attr('src','img/noavatar.png');
			$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
			return false;
		}else{	
			var reader = new FileReader();
			reader.onload = imageIsLoaded;
			reader.readAsDataURL(this.files[0]);
		}
	});
});

function imageIsLoaded(e) {
	$("#avatar_usuario").css("color","green");
	$('#image_preview').css("display", "block");
	$('#previewing').attr('src', e.target.result);
	$('#previewing').attr('width', '220px');
	$('#previewing').attr('height', '220px');
};
});*/


/*=========================================================================*/
/*CArga mas publicaciones al botonazo*/
/*=========================================================================*/
$(function(){
	$("p[data-att='infinite_scroll']").bind("click",function(e) {
		$.ajax({
			type: "POST",
			url: "models/infinite-scroll-publications.php",
		}).done(function(publications) {
			if (publications!=""){
				$("#resultPublications").append(publications);
				$("div.loading").fadeOut();
			}else{
				$("p[data-att='infinite_scroll']").fadeOut();	
			}
		});
	});
	/*$("#resultPublications").scrollExtend({
      "target": "#itemsPublications",
      "url": "models/infinite-scroll-publications.php"
  });*/
});


/*=========================================================================*/
/*Cehca si el usuario ya existe al moemnto de registrarse*/
/*=========================================================================*/
$(function(){
	$("input[data-action='if_user_exists']").on("focusout", function() {
		var is_empty = $("input[data-action='if_user_exists']").val();

		if(is_empty != ""){
			$.ajax({
				type: "POST",
				url: "models/check-user-exists.php",
				data: "username="+ is_empty
			}).done(function(info){
				if(info == 1){
					$(".alert").empty();
					$(".alert").show(300);
					$(".alert").html("<p class='description'>El usuario " + is_empty + " ya está en uso.</p>");
					$("input[data-action='if_user_exists']").focus();
					$("input[data-action='if_user_exists']").val("");
					setTimeout(function() {
						$(".alert").slideUp(200);
					},3000);
				}else{
					$(".alert").empty();
					$(".alert").show(300);
					$(".alert").html("<p class='description'> El usuario si está disponible. </p>");
					setTimeout(function() {
						$(".alert").slideUp(200);
					},3000);
				}
			})
		}else{
			/*Si no*/
		}
	});
});


/*=========================================================================*/
/*Actualiza los puntos de la publicacion*/
/*=========================================================================*/
$(function(){
	$("#action_publication").on("click", ".puntos_acumulados", function(){
		var puntos_actuales = $(this).attr("data-count");
		var token_publicacion = $(this).attr("token_publicacion");

		$.ajax({
			type: "POST",
			url: "models/update-likes-count.php",
			data: "punt="+ tipo_busqueda + "&busqueda=" + busqueda + "&ruta_busqueda=" + ruta_busqueda
		}).done(function(info){
			console.log("Búsqueda almacenada");
			/*alert("RETORNO= " + info)*/
		})
	});
});


/*=========================================================================*/
/*Actualiza contador de visitas constantemente*/
/*=========================================================================*/
var updateVisitCounter = function(){
	$.ajax({
		type: "POST",
		url: "models/visit-counter.php"
	}).done(function(info){
		$("#total-visitas").empty();
		$("#total-visitas").html(info + " visitas");
	})
}

/*=========================================================================*/
/*FUNCION PARA CARGR USUARIOS EN LINEA en TIEMPO REAL*/
/*=========================================================================*/
var usersOnline = function(){
	$.ajax({
		type: "POST",
		url: "models/users-online.php"
	}).done(function(info){
		$("#usuarios-online").html(info + " online");
	})
}


/*=========================================================================*/
/*Carga los negocios agregados recientemente*/
/*=========================================================================*/
$(function(){
	$("#randomBusiness").click(function(){
		$.ajax({
			type: "POST",
			url: "models/random-business.php"
		}).done(function(info){
			$("#listaNegocios").empty();
			$("#listaNegocios").html(info);
		})
	});
});

/*
=================================================================
Función para actualizar los puntos de las publicaciones
=================================================================
*/
$(function(){
	$("#points_counter").on("click", ".counter", function(){
		var token_publicacion = $(this).attr("data-react");
		alert(token_publicacion);
		$.ajax({
			type: "POST",
			url: "models/update-likes-count.php",
			data: "token_publicacion="+ token_publicacion
		}).done(function(info){
			alert("RETORNO= " + token_publicacion);
		})
	});
});


/*=========================================================================*/
/*Carga los negocios buscados en el buscador*/
/*=========================================================================*/
$(function(){
	$("#buscador").keyup(function(){
		var busqueda = $("#frm_buscador").serialize(); 

		if(busqueda == ""){
			$("#buscador").attr("placeholder", "Escribe algo a buscar.");
		}else{
			$.ajax({
				type:"POST",
				url: "models/search-business.php",
				data: busqueda
			}).done(function(info){
				$("#listaNegocios").empty();
				$("#listaNegocios").html(info);
			})
		}
	});
});


/*=========================================================================*/
/*Carga las categorias aleatoriamente*/
/*=========================================================================*/
$(function(){
	$("#randomCategories").click(function(){
		$.ajax({
			type: "POST",
			url: "models/random-categories.php"
		}).done(function(info){
			$("#itemsCategories").empty();
			$("#itemsCategories").html(info);
		})
	});
});


/*=========================================================================*/
/*Carga los 9 negocios aleatorios al iniciar*/
/*=========================================================================*/
var loadBusiness = function(){
	$.ajax({
		type: "POST",
		url: "models/load-business.php"
	}).done(function(info){
		$("#listaNegocios").html(info);
	})
}

/*=========================================================================*/
/*Carga las publicaciones*/
/*=========================================================================*/
var loadPublications = function(){
	$.ajax({
		type: "POST",
		url: "models/load-publications.php"
	}).done(function(info){
		$("#itemsPublications").html(info);
	})
}


/*=========================================================================*/
/*Carga las publicaciones*/
/*=========================================================================*/
var loadCategories = function(){
	$.ajax({
		type: "POST",
		url: "models/load-categories.php"
	}).done(function(info){
		$("#itemsCategories").html(info);
	})
}




$(function(){
	$("#itemsCategories").on("click", ".max-link", function(){
		var busqueda = $(this).attr("data-category");

		$.ajax({
			type: "POST",
			url: "code/filter-categories.php",
			data: "categoria="+ busqueda
		}).done(function(info){
			$("#filterCategories").html(info);
			document.location.href = "categories?category=" + categoria;
		})
	});
});