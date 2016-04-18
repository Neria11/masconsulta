	<?php 
	include("connection.php");


	if(count($_POST) > 0){
		$id_negocio = 1;		
		$id_sucursal = 1;	
		$titulo_publicacion = $POST["titulo_publicacion"];	
		$tipo_publicacion = "VIDEO";	
		$descripcion_publicacion = $POST["descripcion_publicacion"];	
		$id_usuario = 1;
		$direccion_ip_usuario = $_SERVER["REMOTE_ADDR"];	
		$fecha_publicada = date("Y-m-d H:i:s"); 
		$fecha_vencimiento = date("Y-m-d H:i:s");	
		$token_publicacion = "kjkzapj";
		$puntos_acumulados = 0;	
		$status = 1;

		if($tipo_publicacion == "VIDEO"){

			$url_video = personalizeUrlVideo($POST["contenido_publicacion"]);
			$token_publicacion = generateTokenPublication();

			$sql_image = "INSERT INTO publicaciones_negocios(
				id_negocio, 	
				id_sucursal, 	
				titulo_publicacion,
				tipo_publicacion,
				contenido_publicacion,
				descripcion_publicacion, 	
				id_usuario,	
				direccion_ip_usuario, 	
				fecha_publicada, 	
				fecha_vencimiento, 	
				token_publicacion, 	
				puntos_acumulados, 	
				status
				) VALUES(
				'".$id_negocio."',
				'".$id_sucursal."',
				'".$titulo_publicacion."',
				'".$tipo_publicacion."',
				'".$contenido_publicacion."',
				'".$descripcion_publicacion."',
				'".$id_usuario."',
				'".$direccion_ip_usuario."',
				'".$fecha_publicada."',
				'".$fecha_vencimiento."',
				'".$token_publicacion."',
				'".$puntos_acumulados."',
				'".$status."',
				)";

	echo "VARIABLES" . $sql_image;
	echo "HOLA";
	
}

if($tipo_publicacion == "VIDEO"){

}

if($tipo_publicacion == "TEXTO"){

}
}

/*header("Location: ../index.php");*/

?>