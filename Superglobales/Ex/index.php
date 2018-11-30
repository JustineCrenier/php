<?php
	//exercice 1
	$userAgent = $_SERVER['HTTP_USER_AGENT'];
	$adresse_ip = $_SERVER['REMOTE_ADDR'];
	$serverName = $_SERVER['SERVER_NAME'];

	//exercice 2
	session_start();

	$_SESSION['nom'] = "Crenier";
	$_SESSION['prenom'] = "Justine";
	$_SESSION['age'] = 25;

	//exercice 3
	$login = $_POST['login'];
	$mdp = $_POST['password'];
	setcookie("login", $ , time() + 600);
	setcookie("password", $mdp, time() + 600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SuperGlobales</title>
</head>
<body>
	<h1>SuperGlobales</h1>
	<section>
		<h2>Exercice 1</h2>
		<p><?php echo $userAgent; ?></p>
		<p><?php echo $adresse_ip; ?></p>
		<p><?php echo $serverName; ?></p>
	</section>
	<section>
		<h2>Exercice 2</h2>
		<p>Cliquer sur le lien pour voir les variables de session</p>
		<a href="page2.php">Lien vers la page 2</a>
	</section>
	<section>
		<h2>Exercice 3</h2>
		<form method="POST" action="index.php">
			<p><input type="text" name="login" placeholder="login"></p>
			<p><input type="password" name="password" placeholder="mot de passe"></p>
			<p><input type="submit" name="submit" value="submit"></p>
		</form>
	</section>
	<section>
		<h2>Exercice 4</h2>
		<p>Cliquer sur le lien pour voir les cookies récupérés à l'exercice 3</p>
		<a href="page2.php">Lien vers la page 2</a>
	</section>
</body>
</html>