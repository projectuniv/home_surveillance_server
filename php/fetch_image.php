<?php
require_once('utils.php');
$events = array();
$eventArray = array();
//if(isset($_POST['user_id'])){
$query = "SELECT image FROM events;";

$co = connectDB();

$res = $co->query($query);

if($res->num_rows > 0){
	while($rows = $res->fetch_assoc()){
		$events['image'] =  base64_encode($rows['image']);
		
		$eventArray[]= $events;
		//echo '<img src="data:image/jpeg;base64,'.$events['image'] .'"/>';
		echo "<img width='280' src='data:image/jpeg;base64,".$events['image'] ."'/>";
	}
}

/*header("Content-Type : application/json");
echo json_encode(array("result" => $eventArray));*/

//header('Content-Type:image/jpeg'); 
//echo $eventArray; 
//echo '<img src="data:image/jpeg;base64,'. $eventArray['image'] .'"/>';
//}

?>