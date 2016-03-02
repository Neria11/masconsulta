<?php 
include ("connection.php");


$nombre_cliente = $_POST["nombre_cliente"];
$correo_cliente = $_POST["correo_cliente"];
$telefono_cliente = $_POST["telefono_cliente"];
$mensaje_cliente = $_POST["mensaje_cliente"];

$headers .= "From: $nombre_cliente" . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

/*
$contenido = 
"Asunto: " . $asunto_mensaje .
"\n" . 
"\nNombre: " . $nombre_cliente . 
"\n" .
"\nCorreo Cliente: " . $correo_cliente . 
"\n" .
"\nFecha enviado: " . $fecha_enviado .
"\n" .
"\nMensaje: " . "\n" . $mensaje_cliente ;*/

$message = '<html><body>';
$message .= "<h1 style='background:#4ba6e7; padding: 10px; color:white;'>" . $nombre_cliente . " | " . $asunto_mensaje."</h1>";
$message .= "<p style='background:#f1f1f1; color:#4D4D4D; padding: 8px; font-size: 16px; font-family: Arial;'>".$mensaje_cliente."</p>";
$message .= "<a title='Click para responder ahora.' href='mailto:$correo_cliente' style='margin-right:10px; background:#fad46b; display:inline-block; color:#AB7037; padding: 8px; font-size: 16px; font-family: Arial;'>".$correo_cliente."</a>";
$message .= "<span style='margin-right:10px; background:#A1C542; color:white; padding: 8px; display:inline-block; font-size: 16px; font-family: Arial;'>".$telefono_cliente."</span>";
$message .= "<p style='background:#E34759; color:white;  margin-right:10px; display:inline-block;  padding: 8px; font-size: 16px; font-family: Arial;'>".$fecha_enviado."</p>";
$message .= "</body></html>";


try {
	/*GUARDAR EN BD*/
	$sql = "INSERT INTO cuentas_acceso_usua (asunto_mensaje, nombre_cliente, correo_cliente, telefono_cliente, mensaje_cliente, fecha_enviado) 
	VALUES ('".$asunto_mensaje."','".$nombre_cliente."', '".$correo_cliente."', '".$telefono_cliente."', '".$mensaje_cliente."', '".$fecha_enviado."')";
	$result = mysql_query($sql);

	/*ENVIAMOD EL EMAIL*/
	mail($correo_destino, $asunto_mensaje, $message, $headers);
} catch (Exception $e) {
	echo "Excepción capturada: ";
}

?>