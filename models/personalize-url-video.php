<?php 
/*$string_temp = "https://www.youtube.com/watch?v=-24yPFATrtU&list=RD9sU2TfKtLQQ&index=2";
$cadena = $string_temp;*/

$url_youtube = $_POST['url_youtube'];


/*PRIMERA FORMA*/
$firt_cut = explode("youtube.com/watch?v=", $url_youtube);
$code_video = substr($firt_cut[1], 0,11);

/*SEGUNDA FORMA*/
/*$constant_url = substr($cadena, 32, 43);
echo "CADENA: ".$constant_url. "<br/>";*/

/*TERCERA FORMA*/
/*$rest = substr($cadena, -11);
echo "SUBSTRING: ".$rest."<br/>";*/

echo "https://www.youtube.com/embed/".$code_video;
?>