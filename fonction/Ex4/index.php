<?php
	function compare($a, $b){
		if($a > $b){
			return "Le premier nombre est le plus grand";
		}else if ($a < $b) {
			return "Le deuxième nombre est le plus grand";
		}else{
			return "Les nombres sont identiques";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonction ex4</title>
</head>
<body>
	<p><?php echo compare(4,3) ?></p>
	<p><?php echo compare(4,5) ?></p>
	<p><?php echo compare(4,4) ?></p>
</body>
</html>