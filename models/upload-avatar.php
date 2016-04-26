<?php
include("functions.php");

if(is_array($_FILES)) {
	/*NOMBRE DEL USUARIO*/
	$username = "alex";

	/*RESCATO INFORMACION DE LA IMAGEN Y EXTRAIGO LA EXTENSIÓN*/
	$image_name = $_FILES["userImage"]["name"];
	$info_avatar = pathinfo($image_name);
	$image_type = $_FILES["userImage"]["type"];
	$final_image_name = $username.".".$info_avatar["extension"];
	$image_size = $_FILES["userImage"]["size"];

	/*Fecha actual*/
	$current_date = date("Y-m-d H:i:s"); 

	/*Variable para asignar en la primera ves que actualiza perfil*/
	$first_update = 1;

	/*Direccion ip del equipo donde actualizo*/
	$host_user = $_SERVER["REMOTE_ADDR"];

	/*RUTA o CARPEETA DONDE SE GUARDARÁN LOS ARCHIVOS*/
	$path = "images";

	/*URL o PATH QUE SERÁ GUARDADA EN LA BD PARA CONSULTAR DESPUES*/
	$url_save = $path."/".$username."/".$final_image_name;

	/*RUTA FINAL DONDE SE DEPOSITARAN LOS ARCHIVOS CLASIFICADO POR USERNAME*/
	$my_dir = $path."/".$username;

	/*Formatos de imagen permitidos*/
	$allowed_formats = array("image/jpg", "image/jpeg", "image/gif", "image/png", "application/pdf");

	/*Máximo tamaño permito en kb*/
	$max_size= 700000; 

	/*ESTE ES EL ARCHIVO TEMPORAL A MOVER*/
	$sourcePath = $_FILES['userImage']['tmp_name'];

	/*Variable para saber si todo salió bien*/
	$ready_to_move  = false;

	/*Verifico que el formato de la imagen sea el correco y este dentro de los permitidos*/
	if(in_array($image_type, $allowed_formats)){
		/*Verifico que el tamaño de la imagen sea el correcto*/
		if($image_size <= $max_size * 1024){

			/*Verifico si existe el directorio, Sino creo la ruta a donde debe introducirse*/
			if (!file_exists($my_dir)){
				mkdir($my_dir, 0777, true);
			}

			/*Si ya existe el archivo lo elimino*/
			if (file_exists($my_dir)){
				unlink($url_save);
			}

			/*Aqui indicamos que todo va bien...Procedemos a mover*/
			$ready_to_move = true;

			/*Si todo funcionó correcto se hace la operación*/
			if($ready_to_move){
				if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {

					if(move_uploaded_file($sourcePath,$url_save)) {
						?>
						<img src="<?php echo $url_save; ?>" width="100px" height="100px"/>
						<h1><?php echo $final_image_name; ?></h1>
						<?php

					/*Verificamos la cantidad de actualziaciones
					$cantidad_actualizaciones = "SELECT cantidad_actualizaciones from informacion_usuario";
					$ultima_actualizacion = mysql_fetch_row(mysql_query($cantidad_actualizaciones));

					if($ultima_actualizacion[0] > 0){
						$final_count  = $ultima_actualizacion[0] + 1;
						mysql_query("UPDATE informacion_usuario 
							SET cantidad_actualizaciones = '".$final_count."'
							WHERE username ='".$username."'");
					}elseif($ultima_actualizacion[0] == 0 ){
						$first_update = "INSERT INTO informacion_usuario (cantidad_actualizaciones) 
						VALUES ('".$first_update."')";
					}*/

					/*GUARDAMOS EN LA BASE DE DATOS*/
					/*$update_avatar = "UPDATE informacion_usuario
					SET	path_avatar = '".$url_save."'
					WHERE username = '".$username."' ";

					mysql_query($actualiza_perfil);*/
				}
			}
		}else{
			echo "Ocurrió un error. Intente de nuevo.";
		}

	}else{
		echo "El archivo no tiene el tamaño indicado";
	}
}else{
	echo "El archivo no es del tipo permitido";
}
}
?>