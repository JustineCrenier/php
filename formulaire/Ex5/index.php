<?php
	$gender = $_POST['gender'];
	$name = $_POST['name'];
	$fName = $_POST['fName'];
	$file = $_POST['file'];
	function get_extension($file) {
	 $extension = end(explode(".", $file));
	 return $extension ? $extension : false;
	}
	if(isset($file) && get_extension($file) != "pdf"){
		$fileC = "le fichier doit être un pdf";
	}else{
		$fileC = $file;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire ex5-6-7-8</title>
</head>
<body>
	<?php if (isset($gender) && isset($name) && isset($fName)) {
		echo "Bonjour ".$gender." ".$fName." ".$name."<br>Votre fichier: ".$fileC;
	}else{ ?>
		<form method='POST' action='index.php' id='form'>
			<select name='gender' id='gender'>
				<option value='Mr'>Mr</option>
				<option value='Mme'>Mme</option>
			</select>
			<input type='text' name='name' placeholder='Votre Nom'>
			<input type='text' name='fName' placeholder='Votre prénom'>
			<input type="file" name="file">
			<input type='submit' value='GO'>
		</form>
	<?php } ?>
</body>
</html>