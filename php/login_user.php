<?php
require_once('utils.php');

if(isset($_POST['username']) && isset($_POST['password'])){
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	$result = array();
	
	$co = connectDB();
	$query = "SELECT * FROM user WHERE username = '".$uname."'  AND password = '".$pass."' ";
	$res = $co->query($query);
	//var_dump($res); exit();

	if($res->num_rows == 1) $result[] = 1;
	else $result[] = 0;

	header("Content-Type : application/json");
	echo json_encode(array("result" => $result));

}

?>