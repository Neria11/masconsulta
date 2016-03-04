<?php 
// assemble the message from the POST fields
// getting the captcha
$captcha = "";
$url = "https://www.google.com/recaptcha/api/siteverify";

if (isset($_POST["g-recaptcha-response"])){
	$captcha = $_POST["g-recaptcha-response"];
}

if (!$captcha){
	echo 0;
}

// handling the captcha and checking if it's ok
$secret = "6Ldz1RkTAAAAACY8hG77R3nYN2_BTZ692blagAtt";
$response = file_get_contents($url."?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]);

$data = json_decode($response);

// if the captcha is cleared with google, send the mail and echo ok.
if (isset($data->success) AND $data->success == true) {

    // send the actual mail
	include ("connection.php");

	$destino = "informacion@grutastolantongo.com.mx";
	/*informacion@grutastolantongo.com.mx*/
	$asunto_mensaje = $_POST["asunto_mensaje"];
	$nombre_cliente = $_POST["nombre_cliente"];
	$correo_cliente = $_POST["correo_cliente"];
	$telefono_cliente = $_POST["telefono_cliente"];
	$mensaje_cliente = $_POST["mensaje_cliente"];
	date_default_timezone_set("America/Mexico_City");
	$fecha_enviado = date("M j, Y, H:i:s");
	$headers .= "From: $nombre_cliente" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = '<html><body>';
	$message .= "<h1 style='background:#4ba6e7; padding: 10px; color:white;'>" . $nombre_cliente . " | " . $asunto_mensaje."</h1>";
	$message .= "<p style='background:#f1f1f1; color:#4D4D4D; padding: 8px; font-size: 16px; font-family: Arial;'>".$mensaje_cliente."</p>";
	$message .= "<a title='Click para responder ahora.' href='mailto:$correo_cliente' style='margin-right:10px; background:#fad46b; display:inline-block; color:#AB7037; padding: 8px; font-size: 16px; font-family: Arial;'>RESPONDER A: ".$correo_cliente."</a>";
	$message .= "<span style='margin-right:10px; background:#A1C542; color:white; padding: 8px; display:inline-block; font-size: 16px; font-family: Arial;'>".$telefono_cliente."</span>";
	$message .= "<p style='background:#E34759; color:white;  margin-right:10px; display:inline-block;  padding: 8px; font-size: 16px; font-family: Arial;'>".$fecha_enviado."</p>";
	$message .= "</body></html>";

	try {
		/*GUARDAR EN BD*/
		$sql = "INSERT INTO correos (asunto_mensaje, nombre_cliente, correo_cliente, telefono_cliente, mensaje_cliente, fecha_enviado) 
		VALUES ('".$asunto_mensaje."','".$nombre_cliente."', '".$correo_cliente."', '".$telefono_cliente."', '".$mensaje_cliente."', '".$fecha_enviado."')";
		$result = mysql_query($sql);

		/*ENVIAMOD EL EMAIL*/
		mail($destino, $asunto_mensaje, $message, $headers);
		
		// the echo goes back to the ajax, so the user can know if everything is ok
		echo 1;
	} catch (Exception $e) {
		/*SE CAPTURA EL ERROR*/
	}

    
} else {
	echo 0;
}
?>