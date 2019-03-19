<!DOCTYPE html>
<html>
<head>
	<title> Exemple : premier cours </title>
</head>
<body>
	<h1> Mon premier essai PHP </h1>
	<br/>
	<p> Le 18 octobre, nous avons commencé le cours </p>
	<?php
		/* Les commentaire comme le c */
		$nom = "paris";
		echo "La ville est :" .$nom;
		printf ("<br/> La ville est : %s", $nom);
		$age = 3;
		echo "<br/> Votre age est :" .$age;
		printf ("<br/> Votre age : %d", $age);
	?>
</body>
</html>
