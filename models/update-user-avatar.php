<?php
if(isset($_FILES["file"]["type"])){

	$validextensions = array("jpeg", "jpg", "png", "gif");
	$temporary = explode(".", $_FILES["file"]["name"]);
	$file_extension = end($temporary);


	if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && ($_FILES["file"]["size"] < (1000 * 1024) && in_array($file_extension, $validextensions)) {
		if ($_FILES["file"]["error"] > 0){
			echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
		}else{
			if (file_exists("upload/" . $_FILES["file"]["name"])) {
				echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
			}else{
				$sourcePath = $_FILES['file']['tmp_name']; 
				$targetPath = "upload/".$_FILES['file']['name'];
				@move_uploaded_file($sourcePath,$targetPath) ;
			}
		}
	}else{
		echo "<span id='invalid'>***Invalid file Size or Type***<span>";
	}
}
?>