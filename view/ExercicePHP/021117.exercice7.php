
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




<?php



// LA CARTE
$points = [ // coordonnées xy des noeuds
	'A' => [1,1],
	'B' => [6,4],
	'C' => [8,3],
	'D' => [10,5],
	'E' => [9,9],
	'F' => [2,5],
	'G' => [4,7],
	'H' => [5,10],
	'I' => [8,11]
];

$noeuds = [ // jonctions des noeuds
	'A' => ['B', 'F'],
	'B' => ['A', 'C', 'E', 'G'],
	'C' => ['B', 'D'],
	'D' => ['C', 'E'],
	'E' => ['B', 'D', 'I'],
	'F' => ['A', 'G'],
	'G' => ['B', 'F', 'H', 'I'],
	'H' => ['G', 'I'],
	'I' => ['E', 'G', 'H']
];

// LE PARCOURS
$from = 'A';
$to = 'I';
$parcours = [];
$chemin = $from;
$vrai = true;
$b = $from;
	
while ($vrai == true) {
	$chemin = $chemin . boucle($b, $to, $chemin, $noeuds, $from);
	$a = strpos($chemin, "I");
	if ($a != false){
		$vrai = false;
		$parcours[] = $chemin;
		print_r($chemin);
	}
	$b = substr($chemin, -1);
}




function boucle($pretpouruneboucle, $to, $chemin, $noeuds, $from){
	foreach ($noeuds[$pretpouruneboucle] as $cle => $valeur) {
		$a = strpos($chemin, $valeur);
		//print_r($chemin.'<br>');
			if ($a == false and $valeur != $from) {
				$chemin = $chemin . $valeur;
				#print_r($valeur.'<br>');
				return $valeur;
				break;
			}
}
}



