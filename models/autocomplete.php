<?php
include("connection.php");

$nombre = $_GET['term']; 
 
$consulta = "SELECT nombre FROM negocios_registrados WHERE nombre LIKE '%$nombre%' group by id_negocio";
 
$result = mysql_query($consulta);
 
if(mysql_num_rows($result) > 0){
    while($row = mysql_fetch_array($result)){
        $negocios[] = $row['nombre'];
    }

echo json_encode($negocios);
}
?>