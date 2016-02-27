<?php 
include("connection.php");

	$sql = "SELECT * FROM categorias_negocios ORDER BY rand() LIMIT 6";

	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)) {
		echo "
		<li>
          <a href='categories.php?category=$row[categoria]' class='max-link' title='$row[categoria]' data-category='$row[categoria]'>  $row[categoria]</a>
        </li>";
	}

 ?>