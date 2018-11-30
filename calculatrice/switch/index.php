<?php
	//Vérifier que les inputs ne sont pas vides
	if (isset($_POST['n1']) && isset($_POST['op']) && isset($_POST['n2'])) {
		$n1 = $_POST['n1'];
		$op = $_POST['op'];
		$n2 = $_POST['n2'];
		//choisir la bonne opération
		switch ($op) {
			case '+':
				$resultat = $n1 + $n2;
				break;
			case '-':
				$resultat = $n1 - $n2;
				break;
			case '*':
				$resultat = $n1 * $n2;
				break;
			case '/':
				if ($n1 != 0 && $n2 != 0) {
					$resultat = $n1/$n2;
				}else{
					$resultat = "on peut pas diviser par zero !";
				}
				break;
		}
	}else{
		$resultat = "champs vides";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculatrice</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<form method="POST" action="index.php">
		<input type="number" name="n1" id="n1">
		<select name="op" id="op">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="number" name="n2" id="n2">
		<input type="submit" value="=" id="submit">
	</form>
	<p class="result"><?php echo $resultat; ?></p>
</body>
</html>