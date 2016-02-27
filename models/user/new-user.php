<?php
/*
new-user.php V1.0
autor: @neriasab
Inserta un nuevo usuario
Creado : 22/02/2016 02:00
*/
include("../connection.php");

$message = "";
$nivel_acceso = 1; /*Nivel de acceso 1 para usuarios normales 3 para ADMIN*/
$username = addslashes($_POST["username"]);
$password = md5(addslashes($_POST["password"]));
$email = addslashes($_POST["email"]);
$status_cuenta = 0; /*Hasta que se confirme se activa 1*/
$cantidad_login = 0;

date_default_timezone_set("America/Mexico_City");
$dateRegistered = date("F j, Y, g:i a");

/*Verifico que no exista el usuario*/
$verificar = "SELECT * FROM datos_usuarios where username = '".$username."'";
$existe = mysql_query($verificar);

/*Si los resultados son mayores o igual a 1 que envie un msg indicando elegir otro username*/
if(mysql_num_rows($existe) > 0){
	$message = "El usuario ya exuiste";
	header("Location: ../../registry.php");
}else{
	/*Sino existe ese usuario, se inserta*/
	$sql_user = "INSERT INTO datos_usuarios (username, email) values ('".$username."','".$email."')";
	mysql_query($sql_user);
		
	/*Sino existe ese usuario, se inserta*/
	$sql_account = "INSERT INTO cuentas_usuarios (username, password, nivel_acceso, status_cuenta, fecha_registro) 
	values ('".$username."','".$password."','".$nivel_acceso."', '".$status_cuenta."', $now())";
	mysql_query($sql_account);
	header("Location: ../../login.php");
}

?>