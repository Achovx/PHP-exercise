
<html>
<body>
	<form method="post" action="table_multiplication.php">
	nombre multiplicateur : <input type="text" name="nb">
	limite multiplicateur : <input type="text" name="lim">
	<input type="submit" value="valider" name="valider">
	</form>
<?php
	if(isset($_POST["valider"]))
	{
	$nb = $_POST["nb"];
	$lim = $_POST["lim"];
	for( $m = 1 ; $m <= $lim ; $m ++ )
		{
		$res = $nb * $m;
		echo $nb."*".$m."=".$res;
		}
	}
?>
</body>
</html>