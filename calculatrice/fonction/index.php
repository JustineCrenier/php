<?php
function calc($n1,$n2,$op){
	if (isset($_POST['n1']) && isset($_POST['op']) && isset($_POST['n2'])) {
		if($op == "+") {
			return $n1 + $n2;
		}else if($op == "-") {
			return $n1 - $n2;
		}else if($op == "*"){
			return $n1 * $n2;
		}else if($op == "/"){
			if ($n1 != 0 && $n2 != 0) {
				return $n1/$n2;
			}else{
				return "on peut pas diviser par zero !";
			}
		}
	}else{
		return "champs vides";
	}
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
	<p class="result"><?php echo calc($_POST['n1'], $_POST['n2'], $_POST['op']); ?></p>
</body>
</html>