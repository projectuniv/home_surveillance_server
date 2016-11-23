<?php
require_once('dbconfig.php');

//Fonction de connection à la db
function connectDB(){
	$co = new mysqli(SERVER, USER, PWD, DBNAME);
	if($co->errno) die( $co->error);
	return $co;
}
//http://localhost/home_surveillance/php/register_data.php?nom=allo&prenom=allo&numero=12456325&photo=&addContact=Add+to+database
function addContact($nom, $prenom, $numero){
	$co = connectDB();
	$query = "INSERT INTO user_contact(nom, prenom, numero) VALUES('".$nom."', '".$prenom."', '".$numero."') ;";
	$res = $co->query($query);
	if(!$res) {
		die("error connect ".var_dump($co->error));
	}else{
		$co->close();
		return $res;
	}
}

function getContact(){
	$co = connectDB();
	$query = "SELECT * FROM user_contact;";
	$res = $co->query($query);
	if(!$res) {
		die("get contact error  ".$co->error);
	}
	return $res;
}


?>