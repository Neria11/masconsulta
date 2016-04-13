<?php 
include("connection.php");
include("general-functions.php");

if(count($_POST) > 0){
	$id_negocio = $POST["id_negocio"];		
	$id_sucursal = $POST["id_sucursal"];	
	$titulo_publicacion = $POST["titulo_publicacion"];	
	$tipo_publicacion = $POST["tipo_publicacion"];	
		
	$id_usuario = $POST["id_usuario"];
	$direccion_ip_usuario = $_SERVER["REMOTE_ADDR"];;	
	$fecha_publicada = date("Y-m-d H:i:s"); ;	
	$fecha_vencimiento = ;	
	$token_publicacion = ;
	$puntos_acumulados = 0;	
	$status = 1;

	if($tipo_publicacion == "IMAGEN"){
		$sql_image = "INSERT INTO publicaciones_negocios "
		$url_video = personalizeUrlVideo($POST["contenido_publicacion"]);

	}

	if($tipo_publicacion == "VIDEO"){

	}

	if($tipo_publicacion == "TEXTO"){

	}
}

?>