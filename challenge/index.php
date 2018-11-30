<?php
function longestWord($send){
	//divise la chaine en segment
	$words  = explode(' ', $send);
	//initialise longueur à zero
	$length = (integer) 0;
	//stock le mot le plus long
	$longestWord = '';
	
	//Boucle à travers chaque mot compare la longueur
	//Si oui change la longueur initial et stock le mot
	foreach ($words as $word) {
	   if (strlen($word) > $length) {
	      $length = strlen($word);
	      $longestWord = $word;
	   }
	}
	return $longestWord;
}
echo longestWord("je suis la meilleure ou pas");
?> 