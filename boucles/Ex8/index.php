<?php
	$i = (integer) 200;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>boucle ex8</title>
</head>
<body>
	<?php while ($i >= 0) {
		echo "Enfin"."<br>";
		$i-=12;
	} ?>
</body>
</html>