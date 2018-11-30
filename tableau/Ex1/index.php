<?php
	$mois = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");

	$mois[7] = "Août";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tableau ex1,2</title>
</head>
<body>
	<p><?php echo $mois[2]; ?></p>
	<p><?php echo $mois[5]; ?></p>
	<p><?php echo $mois[7]; ?></p>
</body>
</html>