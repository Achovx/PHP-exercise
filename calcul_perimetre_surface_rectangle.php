<!DOCTYPE html>

<html>

<head>

	<title> Exercice rectangle </title>

</head>

<body>
	<center>
	<h1> Calcul du périmetre et la surface d'un rectangle </h1>
	<br/>

	<form method="post" action="Exemple2.php">
		Longueur :<input type="text" name="Lg"><br/>
		Largeur :<input type="text" name="Lr"><br/>
		<input type="submit" name="valider" value="Valider">
		<input type="reset" name="annuler" value="Annuler">
	</form>
	
	<?php
	if (isset($_POST["valider"]))
	{
		$Lg = $_POST["Lg"];
		$Lr = $_POST["Lr"];
	

	$peri = 2 * ($Lg + $Lr);
	$surf = $Lg * $Lr;

	echo "<br/> Le périmetre est :" .$peri;
	echo "<br/> La surface est :" .$surf;
	}
	?>
	</center>

</body>

</html>
