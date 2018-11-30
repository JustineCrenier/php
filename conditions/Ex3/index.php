<?php
	$age = (integer) 25;
	$genre = (string) "Femme";

	if($genre == "Femme"){
		if($age >= 18){
			$result = "Vous êtes une femme et vous êtes majeur";
		}else{
			$result = "Vous êtes une femme et vous êtes mineur";
		}
	}elseif ($genre == "Homme") {
		if($age >= 18){
			$result = "Vous êtes une homme et vous êtes majeur";
		}else{
			$result = "Vous êtes une homme et vous êtes mineur";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>conditions ex3</title>
</head>
<body>
	<p><?php echo $result ?></p>
</body>
</html>