<?php 
header('Content-type: application/json');
include("connection.php");

$query = "SELECT categoria FROM categorias_negocios";

$result = mysql_query($query);

$rawdata = array(); 
$i=0;
while($row = mysql_fetch_array($result)){
	$rawdata[$i] = $row;
	$i++;
}

echo json_encode($rawdata);
?>
