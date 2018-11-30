<?php
	$monAge = (integer) 18;

	if ($monAge >= 18) {
		$result = (string) "Tu es majeur";
	}else{
		$result = (string) "Tu n'es pas majeur";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>conditions ex6</title>
</head>
<body>
	<p><?php echo $result ?></p>
	<?php
  		echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
	?>
</body>
</html>