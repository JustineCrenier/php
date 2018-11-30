<?php
	function testAge($genre, $age){
		if($genre == "Femme"){
			if($age >= 18){
				return "Vous êtes une femme et vous êtes majeur";
			}else{
				return  "Vous êtes une femme et vous êtes mineur";
			}
		}elseif ($genre == "Homme") {
			if($age >= 18){
				return  "Vous êtes une homme et vous êtes majeur";
			}else{
				return  "Vous êtes une homme et vous êtes mineur";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fonction ex7</title>
</head>
<body>
	<p><?php echo testAge("Femme", 25)  ?></p>
</body>
</html>