<?php  
include("connection.php");

$sql = mysql_query("SELECT *
					FROM negocios_registrados neg
					INNER JOIN categorias_negocios cat 
					ON neg.id_categoria = cat.id_categoria 
					INNER JOIN logotipos_negocios log 
					ON neg.id_negocio = log.id_negocio
					WHERE neg.status = 1 
					order by rand() desc limit 0,9");


while($row = mysql_fetch_array($sql)){
	echo "
			<div class='col-xs-12 col-sm-6 col-md-12 col-lg-6'>
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