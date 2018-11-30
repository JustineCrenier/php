<?php
	$prixBase = (integer) 785;
	$prix = (integer) 785*0.7;
	$ristourne = (integer) $prixBase-$prix;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>variables ex6</title>
</head>
<body>
	<p>Prix de départ: <?php echo $prixBase ?>€</p>
	<p>Ristourne: <?php echo $ristourne ?>€</p>
	<p>Prix à payer: <?php echo $prix ?>€</p>
</body>
</html>