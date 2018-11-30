<?php
	function hello($name, $fName, $age){
		return "Bonjour ".$name." ".$fName.", tu as ".$age." ans.";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonction ex6</title>
</head>
<body>
	<p><?php echo hello("Crenier", "Justine", 25); ?></p>
</body>
</html>