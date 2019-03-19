<!DOCTYPE html>

<html>

<head>

	<title> Exercice moyenne </title>

</head>

<body>
	<center>
	<h1> Calcul de la moyenne </h1>
	<br/>

	<form method="post" action="Exemple3.php">
		Note1 :<input type="text" name="N1"><br/>
		Note2 :<input type="text" name="N2"><br/>
		Note3 :<input type="text" name="N3"><br/>
		<input type="submit" name="valider" value="Valider">
		<input type="reset" name="annuler" value="Annuler">
	</form>
	
	<?php
		if (isset($_POST["valider"]))
	{
		$N1 = $_POST["N1"];
		$N2 = $_POST["N2"];
		$N3 = $_POST["N3"];

		$Moyenne = N1 + N2 + N3;

		echo "<br/> La moyenne est :" .$Moyenne;
	}
	?>
	</center>

</body>

</html>
