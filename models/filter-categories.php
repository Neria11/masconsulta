<?php 
include("connection.php");

$categoria = $_POST["categoria"];

$sql = "SELECT * FROM negocios neg 
		INNER JOIN categorias_negocios cat 
		INNER JOIN logotipos_negocios log 
		WHERE neg.id_categoria = cat.id_categoria
		AND neg.id_negocio = log.id_negocio
		AND categoria = '".$categoria."'";

$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) {
	echo "
			<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
	          <div class='business'>
	            <a href='negocio.php' title='".$row['categoria']."".$row['nombre']."' class='max-link'></a>
	            <figure class='business-logo'>
	              <img src='".$row['path_logotipo']."' alt='Logo ".$row['nombre']."'>
	            </figure>
	            <div class='business-data'>
	              <h4 class='name'>".$row['nombre']."</h4>
	              <span class='nick'>@".$row['pseudonimo']."</span>
	              <p class='category'>".$row['categoria']."</p>
	            </div>
	          </div>
	        </div>
        ";
}
?>