<?php 
include("connection.php");
if(count($_POST)>0){
//Variable para asignar en la primera ves que actualiza perfil
$first_update = 1;

//Direccion ip del equipo donde actualizo
$direccion_ip_usuario = $_SERVER["REMOTE_ADDR"];

//Fecha actual
$fecha_actual = date("Y-m-d H:i:s"); 

//carpeta
$route = "../users";

//Recibir variables por POST
$username = "oso";

// Recibo los datos de la imagen
$nombre_avatar = $_FILES["avatar"]["name"];;
$tipo_avatar = $_FILES["avatar"]["type"];
$tamano_avatar = $_FILES["avatar"]["size"];

$info_avatar = pathinfo($_FILES["avatar"]["name"]);
$nombre_imagen_final = $username.".".$info_avatar["extension"];

//Formatos de imagen permitidos
$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png", "application/pdf");
$limite_kb = 700000; 
$wasMoved  = false;

//Ruta donde se introducira el archivo
$directorio = $route."/".$username;
$final_path = $route."/".$username."/".$nombre_imagen_final;
$url_save = "users/".$username."/".$nombre_imagen_final;


if ($_FILES["avatar"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
//Verifico el tipo/formato de imagen correcto
	if(in_array($tipo_avatar, $permitidos)){

//Verifico que el tamaño no supere los límites
		if($tamano_avatar <= $limite_kb * 1024){

		//Verifico si existe el directorio
			if (!file_exists($directorio)){
			//Sino creo la ruta a donde debe introducirse
				mkdir($directorio, 0777, true);
			}

		//Si ya existe el archivo lo elimino
			unlink($final_path);

		//Muevo el archivo
			@move_uploaded_file($_FILES["avatar"]["tmp_name"], $final_path);
			$wasMoved = true;

			if ($wasMoved){
				/*Verificamos la cantidad de actualziaciones*/
				/*$cantidad_actualizaciones = "SELECT cantidad_actualizaciones from informacion_usuario";
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

				$actualiza_perfil = "UPDATE informacion_usuario
				SET	path_avatar = '".$url_save."',
				ultima_actualizacion = '".$fecha_actual."',
				direccion_ultima_actualizacion = '".$direccion_ip_usuario."'
				WHERE username = '".$username."' ";

				mysql_query($actualiza_perfil);

				echo $url_save;
			}else{
				echo "Ocurrió un  errror:";
			}		
		}else{
			echo "El tamaño no está permitido";
		}
	}else{
		echo "El tipo no está permitido";
	}

}
}

?>