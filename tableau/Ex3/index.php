<?php
	$ara = array(
		'01' => "Ain",
		'03' => "Allier",
		'07' => "Ardèche",
		'15' => "Cantal",
		'26' => "Drôme",
		"38" => "Isère",
		"42" => "Loire",
		"43" => "Haute-Loire",
		"63" => "Puy-de-Dôme",
		"69" => "Rhône",
		"73" => "Savoie",
		"74" => "Haute-Savoie"
	);
	$ara["57"] = "Metz";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tableau ex3</title>
</head>
<body>
	<p><?php echo $ara[69]; ?></p>
	<p><?php echo $ara[57]; ?></p>

	<?php
		foreach ($ara as $key => $value){
    		echo "Le département ".$value." a le numéro ".$key."<br>";
		}
	?>
</body>
</html>