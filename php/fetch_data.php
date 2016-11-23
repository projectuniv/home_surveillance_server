<?php require_once('utils.php');

$contacts = getContact();
$contactsArray = array();
if($contacts->num_rows > 0){
	while($row = $contacts->fetch_assoc()){
		//echo $row['prenom']."  ".$row['nom']."  ".$row['numero']."<br />";
		$contactsArray[] = $row;
	}
}

header("Content-Type : application/json");
echo json_encode(array("db_contacts" => $contactsArray));

?>