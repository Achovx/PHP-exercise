
<html>
<body>
	<form method="post" action="calcul_diviseur.php">
	nombre à diviser : <input type="text" name="nb">
	<input type="submit" value="valider" name="valider">
	</form>
<?php
	if(isset($_POST["valider"]))
	{
	$nb = $_POST["nb"];
	for( $m = 1 ; $m <= $nb ; $m ++ )
		{
		$res = $nb %$m;
		if($res == 0)
			{
			echo $m."<br/>";
			}
		}
	}
?>
</body>
</html>