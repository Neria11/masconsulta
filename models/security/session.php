<?php
include("models/connection.php");

//Variable que retorna un mensaje
$message = "";

$first_visit = 1;

//Verificamos que exista al menos una petición de POST
if(count($_POST) > 0) {
	//Obtenemos el username por método POST
	$username = addslashes($_POST["username"]);

	//Verificamos si el usuario que llega por POST existe en la BD
	$verifica_usuario = "SELECT username FROM cuentas_usuarios where username = '" . $username . "'";
	$existe = mysql_fetch_row(mysql_query($verifica_usuario));

	echo "EXISTE " .$verifica_usuario .$username . $existe[0];

	//Si existe procedemos, sino enviamos mensaje
	if($existe[0] > 0){

		//Verificamos que su status sea 1 sino enviamos mensaje
		$verifica_status = "SELECT status FROM cuentas_usuarios where username = '" . $username . "'";
		$status_actual = mysql_fetch_row(mysql_query($verifica_status));

		if($status_actual[0] == 1){
			//Verificamos si la contraseña es la que le corresponde al usuario
			$user_password = "SELECT * FROM cuentas_usuarios where username = '" . $username . "'";
			$is_password = mysql_query($user_password);
			
			while ($row = mysql_fetch_array($is_password)) {
				//COmparamos la del uusario con la que nos envía el usaurio en el momento
				if($row["password"] == md5($_POST["password"]) ){
					
					//SI es la contraseña, creamos la sesioón
					//Asignamos variables a la sesión
					session_start();
					$_SESSION["id_usuario"] = $row["id_usuario"];
					$_SESSION["username"] = $row["username"];
					session_name("my_current_session".$usuario);

					// Creamos un tiempo definido para la sesion y posteriormente la iniciamos
					$_SESSION["intervalo_permitido"]  = 30; // en minutos
					$_SESSION["inicio"] = time();
					
					//COntamoss cuantos logueos ha hecho en total y le incrementamos uno
					$cantidad_login = "SELECT cantidad_login from cuentas_usuarios";
					$last_login= mysql_fetch_row(mysql_query($cantidad_login));
					if($result[0] > 0){
						$current_login  = $last_login[0] + 1;
						//Actualizamos las variables del ultimo logueo, incrementamos un login mas
						mysql_query("UPDATE cuentas_usuarios 
							SET lastLogin = now(), 
							numLogin = '".$current_login."'
							WHERE username ='".$username."'");
					}elseif($result[0] == 0 ){
							$first = "INSERT INTO cuentas_usuarios (numLogin) 
							VALUES ('".$first_visit."')";
					}

					//Verificamos si la sesion existe y redireccionamos a pagina principal
					if(isset($_SESSION["intervalo_permitido"])) {
						header("Location:dashboard.php");
					}else{
					//SIno existe ninguna session lo rebotamos a index.php
						header("Location:login.php");
					}
					
				}else{
					$message = "<div class='alert alert-warning' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					La contraseña es incorrecta
					</div>";
				}
			}

		}else{
			$message = "<div class='alert alert-warning' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			Tu usuario no está activo.
			</div>";
		}
	}else{
		$message = "<div class='alert alert-warning' role='alert'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
		El usuario no existe.
		</div>";
	}
}

?>