<?php
	session_start();

	//exercie 5
	//exercice 3
	$login = $_GET['login'];
	$mdp = $_GET['password'];
	setcookie("login", $login, time() + 600);
	setcookie("password", $mdp, time() + 600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SuperGlobales - page2</title>
</head>
<body>
	<section>
		<h2>Exercice 5</h2>
		<h2>Exercice 3</h2>
		<form method="GET" action="page3.php">
			<p><input type="text" name="login" placeholder="login"></p>
			<p><input type="password" name="password" placeholder="mot de passe"></p>
			<p><input type="submit" name="submit" value="submit"></p>
		</form>
		<a href="page2.php">Vérifier mes nouvelles données</a>
	</section>
</body>
</html>