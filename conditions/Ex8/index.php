<?php
	$maVariable;

	if($maVariable){
		$result = (string) "c'est ok !!";
	}else{
		$result = (string) "c'est pas bon !!";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>conditions ex8</title>
</head>
<body>
	<p><?php echo $result; ?></p>
	<?php
  		echo ($maVariable) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
	?>
</body>
</html>