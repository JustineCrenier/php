<?php
	function concat($nom, $prenom){
		return $nom." ".$prenom;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonction ex3</title>
</head>
<body>
	<p><?php echo concat("Crenier", "Justine"); ?></p>
</body>
</html>