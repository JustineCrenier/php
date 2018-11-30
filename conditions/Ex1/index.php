<?php
	$age = (integer) 25;

	if ($age >= 18) {
		$condAge = (string) "Vous êtes majeur !";
	}else{
		$condAge = (string) "Vous êtes mineur !";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conditions ex1</title>
</head>
<body>
	<p><?php echo $condAge ?></p>
</body>
</html>