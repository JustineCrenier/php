<?php
	if (isset($_GET['dateDebut']) && isset($_GET['dateFin']) ) {
	    echo $_GET['dateDebut']." ".$_GET['dateFin'];
	}else{
		echo "ces variables ne sont pas attribuées";
	}
?>