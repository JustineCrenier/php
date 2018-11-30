 <?php
	include 'php/pagination.php';

	$page = $_GET['page'];
	$totalArticle = count($contenu); //récupérer le nombre total d'article
	$perPage = (integer) 4; //nombre d'article par page
	$nombrepage = ceil($totalArticle/$perPage); //nombre de page
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pagination</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Exercice : créer une pagination</h1>
	<?php
	$i=1;
	if(isset($page)){
		for ($p=1; $p<$nombrepage+1 ; $p++) { 
			if($page == $p){
				$i=(($p-1)*4)+1;
				$perPage = $p*4;
				for ($i; $i<$perPage+1 ; $i++) { 
					if($i < $totalArticle+1){?> 
					<article>
						<header>
							<h2><?php echo $contenu[$i][titre]; ?></h2>
						</header>
						<p>
							<?php echo $contenu[$i][letexte]; ?>
						</p>
						<footer>
							<p><?php echo $contenu[$i][ladate]; ?></p>
						</footer>
					</article>
				<?	}
				}
			}
		}	
	}else{
		for ($i=1; $i<$perPage+1 ; $i++) { 
			if($i < $totalArticle+1){?> 
			<article>
				<header>
					<h2><?php echo $contenu[$i][titre]; ?></h2>
				</header>
				<p>
					<?php echo $contenu[$i][letexte]; ?>
				</p>
				<footer>
					<p><?php echo $contenu[$i][ladate]; ?></p>
				</footer>
			</article>
		<?	}
		}
	}
	?>
	<nav class="pagination">
		<ul>
			<?php
			for ($i=1; $i<$nombrepage+1 ; $i++) { ?>
				<li>
					<a href="<?= "index.php?page=".$i ?>"><?php echo $i;?></a>
				</li>
			<?php }
			?>
		</ul>
	</nav>		
</body>
</html>