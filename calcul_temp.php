<html>
	<head>
		<title>Exo seconde</title>
	</head>
	<body>
		<center>
			<h1> Calcul du temps en secondes </h1>
			<br/>
		<form method ="post" action="calcul_temp.php">
		Heure : <input type="text" name="h"><br/>
		Minute : <input type="text" name="m"><br/>
		Seconde : <input type="text" name="s"><br/>
		<input type="reset" name="annuler" value="Annuler">
		<input type="submit" name="valider" value="Valider">
		</form> 
				<?php
				if (isset ($_POST["valider"]))
				{
				$H = $_POST["h"];
				$M = $_POST["m"];
				$S = $_POST["s"];

				$SOMME = ($H*3600) + ($M*60) + $S;
				
				echo "</br>Le temps en secondes est :".$SOMME;
				}
				else
				{
				echo "Veuillez remplir les données";
				}
				?>
		</center>
	</body>
</html>