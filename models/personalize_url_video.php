<?php 

$cadena = "https://www.youtube.com/watch?v=-24yPFATrtU&list=RD9sU2TfKtLQQ&index=2";

/*PRIMERA FORMA*/
$primer_corte = explode("youtube.com/watch?v=", $cadena);
$codigo_video = substr($primer_corte[1], 0,11);

/*SEGUNDA FORMA*/
/*$constant_url = substr($cadena, 32, 43);
echo "CADENA: ".$constant_url. "<br/>";*/

/*TERCERA FORMA*/
/*$rest = substr($cadena, -11);
echo "SUBSTRING: ".$rest."<br/>";*/


echo "https://www.youtube.com/embed/".$codigo_video;
?>