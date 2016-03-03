<?php 
include("connection.php");
if(count($_POST) > 0){

	$username = addslashes($_POST["username"]);
	
	$sql = "SELECT count(username) FROM cuentas_acceso_usuarios where username = '".$username."'";

	$result = mysql_fetch_array(mysql_query($sql));

	if($result[0] == 0){
		echo 0;
	}else{
		echo 1;
	}

}

?>