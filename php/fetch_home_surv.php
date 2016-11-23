<?php
require_once('utils.php');
$events = array();
//if(isset($_POST['user_id'])){
$query = "SELECT * FROM events WHERE user_id = 1 ;";

$co = connectDB();

$res = $co->query($query);

if($res->num_rows > 0){
	while($rows = $res->fetch_assoc()){
		$events[] = $rows;
		//var_dump($rows);
	}
}

header("Content-Type : application/json");
echo json_encode(array("result" => $events));

//}

?>