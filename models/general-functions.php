<?php 
include("connection.php");

$do_select = $_POST["do_select"];

switch ($do_select) {
	case "paises":
		select_paises();
		break;

	case "estados":
		select_estados();
		break;

	case "municipios":
		select_estados();
		break;
	
	default:
		# code...
		break;
}

function select_paises(){
	$query = "SELECT * FROM paises";
	$result = mysql_query($query);
}

function select_estados(){
	$query = "SELECT * FROM entidades_federativas";
	$result = mysql_query($query);
}

function select_municipios(){
	$query = "SELECT * FROM municipios";
	$result = mysql_query($query);
}

?>