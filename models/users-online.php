<?php
// nos conectamos a la BD
include('connection.php');

// Tiempo máximo de espera
$time = 5 ;

// Momento que entra en línea
$date = time() ;

// Recuperamos su IP
$ip = $_SERVER["REMOTE_ADDR"];

// Tiempo Limite de espera 
$limite = $date-$time * 60 ;

// si se supera el tiempo limite (5 minutos) lo borramos
mysql_query("DELETE FROM usuarios_en_linea WHERE duracion_sesion < $limite") ;

// tomamos todos los usuarios en linea
$resp = mysql_query("SELECT * FROM usuarios_en_linea WHERE direccion_ip_visitante='$ip'") ;

// Si son los mismo actualizamos la tabla usersonline
if(mysql_num_rows($resp) != 0) {
	mysql_query("UPDATE usuarios_en_linea SET duracion_sesion = '".$date."' WHERE direccion_ip_visitante = '".$ip."'") ;
}
// de lo contrario insertamos los nuevos
else {
	mysql_query("INSERT INTO usuarios_en_linea (duracion_sesion,  direccion_ip_visitante) VALUES ('".$date."','".$ip."')") ;
}

// Seleccionamos toda la tabla
$query = "SELECT * FROM usuarios_en_linea";

// Ocultamos algún mensaje de error con @
$resp = @mysql_query($query) or die(mysql_error());

// almacenamos la consulta en la variable $usuarios
$usuarios = mysql_num_rows($resp);

echo $usuarios;
// Si hay 1 usuarios se muestra en singular; si hay más de uno, en plural
/*if($usuarios > 1 || $usuarios == 0){
	echo("Hay ");
}else{
	echo("Hay ");
}
if($usuarios == 0){
	echo("no ");
}else{
	echo($usuarios." ");
}
if($usuarios > 1 || $usuarios == 0){
	echo("usuarios en línea.");
}else{
	echo("usuario en línea.");
}*/
?>