<!Doctype html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
<?php
//error_reporting(E_ALL | E_STRICT);
require_once('utils.php');

//$imageName = $_POST['image_name'];
//$image = $_POST[''];
//$comment = $_POST['comment'];

//$co = connectDB();
//if( $_FILES["image"]["error"] > 0){

// Verifie que l'image a été uploader
if( !isset($_FILES["image"])){
	echo "ERROR";
}else{
	echo "<h1>IMAGE</h1>";
	//Recuperation de des information de l'image
	echo "Name: ".$_FILES["image"]["name"]."<br />";
	echo "Type: ".$_FILES["image"]["type"]."<br />";
	echo "Size: ".$_FILES["image"]["size"]."<br />";
	echo "Tmp_Name: ".$_FILES["image"]["tmp_name"]."<br />";

	$imageFilter = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageName = addslashes($_FILES["image"]["name"]);
	//echo "Image Filter:".$imageFilter."<br />";

	$co = connectDB();
	$date = Date("d-m-Y");
	$date = "2014-12-10";
	//var_dump($date);
	//exit();
	$query = "INSERT INTO events(id_capteur, date, image, image_name) VALUES('3', '$date', '{$imageFilter}', '{$imageName}');";
	$res = $co->query($query);
	
	var_dump($res);
}

?>
	</body>
</html>