<?
session_start();
if (isset($_POST['Enviar'])) {
	if( $_SESSION['CAPTCHA'] != $_POST['introducido'])
	{
		exit('Te has confundido introduciendo el código');
	}
	echo "Código Correcto!";
}
else {
	echo "ERROR";
}
?>