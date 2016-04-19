<?php 
include("connection.php");

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

function generateTokenPublication($id_publicacion) {
	$key = '';
	$pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
	$max = strlen($pattern)-1;
	for($i=0; $i < 10; $i++) {
		$key .= $pattern{mt_rand(0,$max)};
	}
	
	return $key;
}


function personalizeUrlVideo($url_video){
	$url_youtube = $_POST['url_youtube'];

	$first_cut = explode("youtube.com/watch?v=", $url_youtube);
	$code_video = substr($firt_cut[1], 0,11);

	$final_url_video = "https://www.youtube.com/embed/".$code_video;

	return  $final_url_video; 
}
?>