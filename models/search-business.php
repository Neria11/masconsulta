<?php  
include("connection.php");

$busqueda = $_POST["buscador"];

$sql = mysql_query("SELECT *
					FROM negocios_registrados neg
					INNER JOIN categorias_negocios cat 
					WHERE neg.id_categoria = cat.id_categoria 
					AND neg.status = 1 
					AND neg.nombre like '%".$busqueda."%'");


if(mysql_num_rows($sql) >= 1){

	while($row = mysql_fetch_array($sql)){
	  echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
		        <div class='business'>
		            <a href='business.php' title='".$row['categoria']."".$row['nombre']."' class='max-link'></a>
		            <figure class='business-logo'>";
		            	if($row['path_logotipo'] != ""){
		            		echo "<img src='".$row['path_logotipo']."' alt='Logo ".$row['nombre']."'>";
		            	}else{
		            		echo "<img src='img/nologo.png' alt='Logo ".$row['nombre']."'>";
		            	}
		      echo "</figure>
		            <div class='business-data'>
		              <h4 class='name'>".$row['nombre']."</h4>
		              <span class='nick'>@".$row['pseudonimo']."</span>
		              <p class='category'>".$row['categoria']."</p>
		            </div>
		        </div>
		    </div>";	     
	}

}else{
	echo "<p class='alert yellow'>No hay resultados. Intenta una nueva búsqueda.</p>";
}
?>