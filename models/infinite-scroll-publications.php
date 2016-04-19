<?php
header( 'Content-type: text/html; charset=utf-8' );
session_start();
include("connection.php");
include("ago.php");

if (!isset($_SESSION["cantidadcargadas"])) $_SESSION["cantidadcargadas"] = 5;

$query ="SELECT * FROM publicaciones_negocios pub  
		 INNER JOIN negocios_registrados neg 
		 INNER JOIN categorias_negocios cat
		
		 WHERE pub.id_negocio = neg.id_negocio
		 AND neg.id_categoria = cat.id_categoria 
		
		 order by pub.id_publicacion desc limit ".$_SESSION["cantidadcargadas"].", 5";

$result = mysql_query($query);

while ($row = mysql_fetch_array($result)){
	$time_ago = strtotime($row['fecha_publicada']);
    $hace = haceCuanto($time_ago);
	$tipo_publicacion = $row['tipo_publicacion'];

	echo "
	<div class='col-xs-12 col-sm-6 col-md-12 col-lg-12'>
		<div class='publication'>
			<div class='publication-header'>
				<figure class='logo'>";
					if($row['path_logotipo'] != ""){
	            		echo "<a href='business.php?negocio=$row[pseudonimo]'><img src='".$row['path_logotipo']."' alt='Logo ".$row['nombre']."'></a>";
	            	}else{
	            		echo "<a href='business.php?negocio=$row[pseudonimo]'><img src='img/nologo.png' alt='Logo ".$row['nombre']."'></a>";
	            	}
					
				echo "</figure>
				<h3 class='p-title'> 
					$row[titulo_publicacion]
				</h3>
				<a href='business.php?negocio=$row[pseudonimo]' class='p-nick'>@$row[pseudonimo]</a>
			</div>
			<div class='publication-body'>";
				if($row['contenido_publicacion'] != ""){
					echo "<p class='paragraph'>$row[descripcion_publicacion]</p>";
				}
				if($row['tipo_publicacion'] == "VIDEO"){
			    echo"<div class='video'>
						<iframe allowfullscreen src=".$row['contenido_publicacion']."></iframe>
					</div>";
				}elseif ($row['tipo_publicacion'] == "IMAGEN") {
				echo " <div class='image'>
				        	<a href='$row[contenido_publicacion]' data-fancybox-group='gallery-$row[token_publicacion]' class='fancybox'>
								<img src='$row[contenido_publicacion]' alt=''>
							</a>
						</div>";
				}elseif ($row['tipo_publicacion'] == "TEXTO") {
				echo "<div class='text'>
						<p>
						$row[contenido_publicacion]
						</p>
					 </div>";
				}
	  echo "</div>
			<div class='publication-footer'>
				<span class='date' title='$row[fecha_publicada]'>$hace</span>
				<div class='actions' id='action_publication'>
					<span>$row[puntos_acumulados]</span>
					<p class='like pull-right' id='points_counter'>
						<span class='counter'  data-react='$row[token_publicacion]'> +1 </span>
					</p>
				</div>
			</div>
		</div>
	</div>";
}

$_SESSION["cantidadcargadas"] += 5;

?>