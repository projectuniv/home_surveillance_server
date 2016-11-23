<?php 
 require_once('utils.php');
/*$id_capteur = $_POST['id_capteur'];
$date = date('d/m/Y H:i:s');
$image = $_POST['image'];

if(!empty($id_capteur) || !empty($date) || !empty($image)){
	echo "<b>id_capteur = </b>".$id_capteur." <b>date = </b>".$date.". <b>image = </b>".$image;
}else{
	echo "Check your informations";
}*/

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$numero = $_POST['numero'];
	$photo = $_POST['photo'];

	if(empty($numero)){
		echo "<h1>VEUILLEZ ENTRER LE NUMERO</h1>";
		exit();
	}else if(!empty($nom) && !empty($prenom)){
		addContact($nom, $prenom, $numero);
		//header("Location: ../index.php");
		echo "INSERTION REUSSITE";
		//exit("INSERTION REUSSITE");
		
	}else if(!empty($prenom)){
		addContact(NULL, $prenom, $numero);
		echo "INSERTION REUSSITE";

	}else if(!empty($nom)){
		addContact($nom, NULL, $numero);
		echo "INSERTION REUSSITE";
	}else{
		echo "AUCUNE INSERTION";
	}
	
	

?>