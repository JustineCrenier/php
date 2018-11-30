<?php
	ini_set('display_errors', 1);
	//ex1
	$today = date("d/m/y");
	//ex2
	$today2 = date("d-m-y");
	//ex3
	$today3 = date("l d F y");
	//ex4
	$date = date_create();
	//ex5
	$currentTime = date('y-m-d');
	$d1 = new DateTime('2016-05-16'); 
	$d2 = new DateTime($currentTime); 
	$diff = $d1->diff($d2); 
	$nb_jours = $diff->d; 
	//ex6
	$february = cal_days_in_month(CAL_GREGORIAN, 2, 2017);
	//ex7
	$date=date_create($currentTime);
	date_add($date,date_interval_create_from_date_string("20 days"));
	//ex8
	$date2=date_create($currentTime);
	date_sub($date2,date_interval_create_from_date_string("22 days"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Les dates</title>
</head>
<body>
	<h1>Les dates</h1>
	<section>
		<h2>Exercice 1</h2>
		<p><?php echo $today; ?></p>
	</section>
	<section>
		<h2>Exercice 2</h2>
		<p><?php echo $today2; ?></p>
	</section>
	<section>
		<h2>Exercice 3</h2>
		<p><?php echo $today3; ?></p>
	</section>
	<section>
		<h2>Exercice 4</h2>
		<p><?php echo date_timestamp_get($date); ?></p>
	</section>
	<section>
		<h2>Exercice 5</h2>
		<p><?php echo $nb_jours; ?></p>
	</section>
	<section>
		<h2>Exercice 6</h2>
		<p>Nombre de jour en février 2017: <?php echo $february; ?></p>
	</section>
	<section>
		<h2>Exercice 7</h2>
		<p><?php echo date_format($date,"Y-m-d"); ?></p>
	</section>
	<section>
		<h2>Exercice 8</h2>
		<p><?php echo date_format($date2,"Y-m-d"); ?></p>
	</section>
</body>
</html>