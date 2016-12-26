<!Doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>WirelessHomeSurveillance</title>
		<style type="text/css">
		*{margin: 0px; padding: 0px;}
		body{width: 100%; text-align: center;}
		#form_container{ border: 2px solid black; text-align: center;}
		#event_form{ text-align: center;} 
		#event_form table{ margin: 0px auto; width: 80%;}
		#event_form th{width: 20%; border: 2px black solid; border-collapse: collapse; margin: 0px; background-color: gray;}
		#submit_event_bt{border: 1px solid black; font-weight: bold; width:40%; padding: 5px; margin-bottom: 2px; border-radius: 2px;}
			
		</style>
		<?php require_once('php/utils.php'); ?>
		
	</head>


	<body>
		<h1>Home Surveillance</h1>
		<div id='form_container'>
			
			<form enctype='multipart/form-data' id='event_form' action='php/insert_event.php' method='post' >
				<table>
					<tr><th>ID_CAPTEUR</th><th>DATE</th><th>IMAGE_NAME</th><th>COMMENT</th><th>IMAGE</th></tr>
					<tr>
						<td><input type='text' id='id_capteur' name='id_capteur' size='30' /></td>
						<td><input type='text' id='date' name='date' size='30' /></td>
						<td><input type='text' id='image_name' name='image_name' size='30' /> </td>
						<td><input type='text' id='comment' name='comment' size='30' /> </td>
						<td><input type='file' id='image' name='image' size='30' /> </td>
					</tr>
				</table>
				<div><input type='submit' id='submit_event_bt' value='INSERT INTO DATABASE'/> </div>
			</form>

		</div>
		
	</body>

</html>