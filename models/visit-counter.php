<?php 
include("connection.php");

/*Obtenemos la IP del usuario*/
$direcccion_ip_visitante = $_SERVER["REMOTE_ADDR"];

/*First sesión*/
$first_sesion = 1; 

// Momento que entra en línea
$date = time() ;


$sql = "SELECT direcccion_ip_visitante, 
timediff(now(), fecha_visitado), 
fecha_visitado, 
cantidad_visitas 
FROM visitas_generales 
WHERE direcccion_ip_visitante = '".$direcccion_ip_visitante."'";

$result = mysql_query($sql) or die("Problemas al ejecutar select SQL ".mysql_error());
$fila = mysql_fetch_array($result);
$tiempo_sesion = $fila[1];
$cantidad_visitas = $fila[3]; //Cantidad de visitas
$horas_transcurridas = substr($tiempo_sesion, 0, 2); //Número de horas transcurridas
$timeRest = 5;

if (mysql_num_rows($result) == 0){
	$nueva_visita = "INSERT INTO visitas_generales
	(direcccion_ip_visitante, cantidad_visitas, fecha_visitado) 
	VALUES('".$direcccion_ip_visitante."', '".$first_sesion."', now())";
	mysql_query($nueva_visita) or die("Problemas al ejecutar la insert SQL ".mysql_error());
}elseif (mysql_num_rows($result) > 0 && $horas_transcurridas > $timeRest){
	$actualiza_visitas = "UPDATE visitas_generales 
	SET fecha_visitado = now(), 
	cantidad_visitas = '".$cantidad_visitas."'+1
	WHERE direcccion_ip_visitante = '".$direcccion_ip_visitante."'";
	mysql_query($actualiza_visitas) or die("Problemas al ejecutar update SQL ".mysql_error());
}elseif(mysql_num_rows($result) > 0){
	$actualiza_duracion_sesion = "UPDATE visitas_generales 
	SET duracion_sesion = '".$horas_transcurridas = substr($tiempo_sesion, 0, 8)."'
	WHERE direcccion_ip_visitante = '".$direcccion_ip_visitante."'";
	mysql_query($actualiza_duracion_sesion) or die("Problemas al ejecutar update SQL ".mysql_error());
}

$suma_visitas = "select SUM(cantidad_visitas) from visitas_generales"; //Obtenemos la suma de todas las visitas
$total_visitas = mysql_query($suma_visitas) or die("Problemas al ejecutar select SQL ".mysql_error());
$resultado_conteo  = mysql_fetch_array($total_visitas); //Almacenanos el resultado de la consulta en un arreglo
$visitas_finales = $resultado_conteo[0]; //Número de visitas
echo $visitas_finales;
mysql_close($link);
?>