<div id="contacts-api">
			<h1>Contacts API</h1>
			<form action="php/register_data.php" method="post">
				<table>
					<tr>
						<td>Nom</td><td><input type="text" id="nom" name="nom" /></td>
					</tr>
					<tr>
						<td>Prénom</td><td><input type="text" id="prenom" name="prenom" /></td>
					</tr>
					<tr>
						<td>Numéro</td><td><input type="text" id="numero" name="numero" /></td>
					</tr>
					<tr>
						<td>Upload photo</td><td><input type="file" id="photo" name="photo" /></td>
					</tr>
				</table>
				<div><input type='submit' value='Add to database' id='addContact' name='addContact'/></div>
			</form>
		</div>

		<div>
			<form action='php/fetch_data.php' method='get'>
				<div><input type='submit' value="Sync to phone" /><input type='submit' value="Sync to database" /></div>
			</form>
		</div>

		<div id='data-container'>
			<h3>Contacts</h3>
			<div class='left-div'>
				<h4>Mobile Contacts</h4>
			</div>
			<div class='right-div'>
				<h4>Database Contacts</h4>
				<?php $contactsReq = getContact(); ?>
					<?php if($contactsReq->num_rows > 0 ): ?>
							<table id="db_contact_table">
								<tr> <th>Nom</th> <th>Prenom</th> <th>Numéro</th> </tr>
								<?php while($row = $contactsReq->fetch_assoc()) :?>
								<tr> <td><?php echo $row['nom'] ?></td> <td><?php echo $row['prenom'] ?></td> <td><?php echo $row['numero'] ?></td></tr>
								<?php endwhile; ?>
							</table>
					<?php endif; ?>
				
			</div>
		</div>