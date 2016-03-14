<?php 
include("connection.php");
include("ago.php");

$sql = "SELECT * FROM publicaciones_negocios pub  
INNER JOIN logotipos_negocios logs
INNER JOIN negocios_registrados neg 
INNER JOIN categorias_negocios cat
WHERE pub.id_negocio = logs.id_negocio 
AND pub.id_negocio = neg.id_negocio
AND neg.id_categoria = cat.id_categoria 
order by pub.id_publicacion desc limit 0, 5";

$result = mysql_query($sql);


while ($row = mysql_fetch_array($result)) {
  	$time_ago = strtotime($row['fecha_publicada']);
    $hace = haceCuanto($time_ago);
    $tipo_publicacion = $row['tipo_publicacion'];

	echo "
	<div class='col-xs-12 col-sm-6 col-md-12 col-lg-12'>
		<div class='publication'>
			<div class='publication-header'>
				<figure class='logo'>
					<img src='$row[path_logotipo]' alt=''>
				</figure>
				<h3 class='p-title'> 
					<a href='negocio.php'>$row[nombre]</a>
				</h3>
				<span class='p-nick'>@$row[pseudonimo]</span>
			</div>
			<div class='publication-body'>";
				if($tipo_publicacion == "VIDEO"){
					echo "  <div class='video'>
					<iframe allowfullscreen src=".$row['contenido_publicacion']."></iframe>
							</div>";
				}elseif ($tipo_publicacion == "IMAGEN") {
					echo " <div class='image'>
					        	<a href='$row[contenido_publicacion]' data-fancybox-group='gallery-$row[token_publicacion]' class='fancybox'>
									<img src='$row[contenido_publicacion]' alt=''>
								</a>
							</div>";
				}elseif ($tipo_publicacion == "TEXTO") {
					echo "<div class='text'>
							<p>
							$row[contenido_publicacion]
							</p>
						 </div>";
				}
			echo "</div>
			<div class='publication-footer'>
				<span class='date' title='$row[fecha_publicada]'>$hace</span>
				<div class='actions'  id='action_publication'>
					<span id='token_publicacion' token_publicacion='$row[token_publicacion]' data-count='$row[puntos_acumulados]'>$row[puntos_acumulados]</span>
					<p class='like pull-right'>
						<span class='counter'> $row[id_publicacion] </span>
					</p>
				</div>
			</div>
		</div>
	</div>";
}

?>