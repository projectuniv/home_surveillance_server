<?php
require_once('utils.php');
$events = array();
$eventArray = array();
//if(isset($_POST['user_id'])){
$query = "SELECT id, id_capteur, image_name, date, user_id FROM events WHERE user_id = 1 ;";

$co = connectDB();

$res = $co->query($query);

if($res->num_rows > 0){
	while($rows = $res->fetch_assoc()){
		//$events[] = $rows;
		$events['id'] = $rows['id'];
		$events['id_capteur'] = $rows['id_capteur'];
		//$events['image'] =  base64_encode($rows['image']);
		$events['image_name'] = $rows['image_name'];
		$events['date'] = $rows['date'];
		$events['user_id'] = $rows['user_id'];
		$eventArray[]= $events;

	}
}

header("Content-Type : application/json");
echo json_encode(array("result" => $eventArray));

//}

?>