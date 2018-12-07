<!DOCTYPE html>
<html>
<head>
	<title>Premier exemple en PHP avec Form</title>
</head>
<body>

	<h1>Saisie d'un nouveau contact</h1>

	<form action="donneeserveur.php" method="post">
		<label>Votre e-mail * :</label>
		<input type="email" name="user_email" required/></br>
		<label>N° :</label>
		<input type="number" name="user_n_adresse" min="0" max="600" /></br>
		<label>Adresse :</label>
		<input type="Adresse" name="user_adresse" required/></br>
		<label>Ville :</label>
		<select name="user_ville" size="1">
			<option>Bordeaux</option>
			<option>Caen</option>
			<option>Lyon</option>
			<option>Toulouse</option>
			<option>Strasbourg</option>
		</select></br>
		<label>Titulaire de la carte bancaire *</label>
		<input type="text" name="prenom" placeholder="Prénom" required />
		<input type="text" name="nom" placeholder="Nom" required /></br>
		</br>
		<label>Numéro de carte bancaire *</label>
		</br>
		<textarea rows="10" cols="40" name="texte"></textarea></br>

</br>
<input type="submit" name="valid" value ="SUBMIT"/>
</form>
</br>
<a href="script.php">Accueil</a>


</body>
</html>