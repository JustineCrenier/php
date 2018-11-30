<?php
	function add($a = 1, $b = 2, $c = 3){
		return $a+$b+$c;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonction ex8</title>
</head>
<body>
	<p><?php echo add(); ?></p>
	<p><?php echo add(4, 5, 6); ?></p>
</body>
</html>