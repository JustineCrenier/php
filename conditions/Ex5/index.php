<?php
	$genre = (string) "Femme";

	if ($genre != "Homme") {
		$result = (string) "c'est une développeuse !!!";
	}else{
		$result = (string) "c'est un développeur !!!";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>conditions ex5</title>
</head>
<body>
	<p><?php echo $result ?></p>
	<?php
  		echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
	?>
</body>
</html>