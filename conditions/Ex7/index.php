<?php
	$maVariable == (bool) false;

	if ($maVariable == false) {
		$result = (string) "c'est pas bon !!!";
	}else{
		$result = (string) "c'est ok !!";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>conditions ex7</title>
</head>
<body>
	<p><?php echo $result ?></p>
	<?php
  		echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
	?>
</body>
</html>