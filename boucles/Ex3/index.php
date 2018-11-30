<?php
	$i = (integer) 100;
	$number = (integer) 23;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>boucles ex3</title>
</head>
<body>
	<?php
		while ($i > 10) {
			$result = $i*$number;
			$i--;
			echo $result."<br>";
		}
	?>
</body>
</html>