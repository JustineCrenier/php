<?php
	$magnitude = (integer) 4;

	switch ($magnitude) {
		case 1:
			$result = (string) "Micro-séisme impossible à ressentir.";
			break;
		case 2:
			$result = (string) "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
			break;
		case 3:
			$result = (string) "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
			break;
		case 4:
			$result = (string) "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
			break;
		case 5:
			$result = (string) "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
			break;
		case 6:
			$result = (string) "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
			break;
		case 7:
			$result = (string) "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
			break;
		case 8:
			$result = (string) "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
			break;
		case 9:
			$result = (string) "Séisme capable de tout détruire sur une très vaste zone.";
			break;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>conditions ex4</title>
</head>
<body>
	<p><?php echo $result ?></p>
</body>
</html>