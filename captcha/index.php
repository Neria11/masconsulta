<html>
<head>
   <title>Página con formulario protegido por captcha</title>
</head>

<body>
<?
require_once('recaptchalib.php');
//Llaves de la captcha
$captcha_publickey = "6LfC?.";
$captcha_privatekey = "6LfC? ";
$error_captcha=null;

if ($_POST){
   $captcha_respuesta = recaptcha_check_answer ($captcha_privatekey,
$_SERVER["REMOTE_ADDR"],
$_POST["recaptcha_challenge_field"],
$_POST["recaptcha_response_field"]);
   if ($captcha_respuesta->is_valid) {
      //todo correcto
      //hacemos lo que se deba hacer una vez recibido el formulario válido
      echo "Todo correcto!";
   }else{
      //El código de validación de la imagen está mal escrito.
      echo "Has escrito mal el texto";
      $error_captcha = $captcha_respuesta->error;
   }
}
?>

<form action="miejemplo_formulario.php" method="post">
Nombre: <input type="text" name="nombre" size="30">
<br>
Edad: <input type="text" name="edad" size="3">
<br>
<?
//escribimos en la página lo que nos devuelve recaptcha_get_html()
echo recaptcha_get_html($captcha_publickey, $error_captcha);
?>
<br>
<input type="submit" value="Enviar">
</form>

</body>
</html>