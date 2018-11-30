<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SuperGlobales - page2</title>
</head>
<body>
	<section>
		<h2>Exercice 2</h2>
		<p><?php echo $_SESSION['nom']; ?></p>
		<p><?php echo $_SESSION['prenom']; ?></p>
		<p><?php echo $_SESSION['age']; ?></p>
		<a href="index.php">Lien vers l'index</a>
	</section>
	<section>
		<h2>Exercice 4</h2>
		<p><?php echo $_COOKIE['login']; ?></p>
		<p><?php echo $_COOKIE['password']; ?></p>
		<a href="page3.php">Modifier mes données de connexion</a>
		<br>
		<a href="index.php">Lien vers l'index</a>
	</section>
</body>
</html>