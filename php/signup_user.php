<?php
require_once('utils.php');
if(isset($_POST['username']) && isset($_POST['password'])){
	$result = array();
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	$query = "INSERT INTO user (username, password) VALUES ('".$uname."', '".$pass."');";
	$co = connectDB();
	$res = $co->query($query);
	if($res) $result[] = 1;
	else $result[] = 0;

	header("Content-Type : application/json");
	echo json_encode(array("result" => $result));

}

?>