<?php
header( 'Content-type: text/html; charset=utf-8' );
session_start();
include("connection.php");

if (!isset($_SESSION["cantidadcargadas"])) $_SESSION["cantidadcargadas"] = 5;

$query = "SELECT * FROM publicaciones_negocios pub  
	INNER JOIN logotipos_negocios logs
	INNER JOIN negocios neg 
	INNER JOIN categorias_negocios cat
	WHERE pub.id_negocio = logs.id_negocio 
	AND pub.id_negocio = neg.id_negocio
	AND neg.id_categoria = cat.id_categoria 
	order by id_publicacion desc limit ".$_SESSION["cantidadcargadas"].", 5";

$result = mysql_query($query);

while ($row = mysql_fetch_array($result)){
	echo "
	<div class='col-xs-12 col-sm-6 col-md-12 col-lg-12'>
		<div class='publication'>
			<div class='publication-header'>
				<figure class='logo'>
					<img src='$row[path_logotipo]' alt=''>
				</figure>
				<h3 class='p-title'> 
					<a href='#'>$row[nombre]</a>
				</h3>
				<span class='p-nick'>@$row[pseudonimo]</span>
			</div>
			<div class='publication-body'>
				<div class='image'>
					<a href='$row[contenido]' data-fancybox-group='gallery-$row[token_publicacion]' class='fancybox'>
						<img src='$row[contenido]' alt=''>
					</a>
				</div>
			</div>
			<div class='publication-footer'>
				<span class='date'>$row[fecha_publicada]</span>
				<div class='actions'>
					<p class='like'>
						<span class='counter'> +1 </span>
					</p>
				</div>
			</div>
		</div>
	</div>";
}

$_SESSION["cantidadcargadas"] += 10;

?>