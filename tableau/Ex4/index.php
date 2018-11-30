<?php
	$name = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tableau ex4</title>
</head>
<body>
	<?php
		foreach ($name as $value) {
			echo "Salut ".$value.", devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)<br>";
		}
	?>
</body>
</html>