<?php
	$i = (integer) 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>boucle ex4</title>
</head>
<body>
	<?php
		while ($i < 10) {
			echo $i."<br>";
			$i+=$i/2; 
		}
	?>
</body>
</html>