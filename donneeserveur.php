<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Liste nouveaux contacts</h1>
</br>
<table border="1">
<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Commentaires</th></tr>

<?php
if ((isset($_POST['nom'])) && (isset($_POST['prenom'])) && (isset($_POST['user_email']))){

if (isset($_POST['nom']) && !empty($_POST['nom'])){
	$nom = $_POST['nom'];
}

if (isset($_POST['prenom']) && !empty($_POST['prenom'])){
	$prenom = $_POST['prenom'];
}

if (isset($_POST['user_email']) && !empty($_POST['user_email'])){
	$user_email = $_POST['user_email'];
}
if (isset($_POST['texte']) && !empty($_POST['texte'])){
	$texte = $_POST['texte'];
}

?>

<tr>
	<td><?php if (isset($_POST['nom']) && !empty($_POST['nom'])) echo $nom; else echo "Néant"; ?></td>
	<td><?php if (isset($_POST['prenom']) && !empty($_POST['prenom'])) echo $prenom; else echo "Néant"; ?></td>
	<td><?php if (isset($_POST['user_email']) && !empty($_POST['user_email'])) echo $user_email; else echo "Néant"; ?></td>
	<td><?php if (isset($_POST['texte']) && !empty($_POST['texte'])) echo $texte; else echo "Néant"; ?></td>
</tr>

<!--<?php 
}

if ((isset($_POST['nom'])) && (isset($_POST['prenom'])) && (isset($_POST['user_email']))){
?>

<tr>
	<td><?php if (isset($_POST['nom']) && empty($_POST['nom'])) echo "Néant"; ?></td>
	<td><?php if (isset($_POST['prenom']) && empty($_POST['prenom'])) echo "Néant"; ?></td>
	<td><?php if (isset($_POST['user_email']) && empty($_POST['user_email'])) echo "Néant"; ?></td>
	<td><?php if (isset($_POST['texte']) && empty($_POST['texte'])) echo "Néant"; ?></td>
</tr>
<?php
	}
?>-->
</table>
</br>
</body>
</html>