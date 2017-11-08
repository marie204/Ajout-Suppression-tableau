<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="081117ex7.php" method="post">
		Selection From:
		<select name="selectFrom">
			<option value="A">A </option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="E">E</option>
			<option value="F">F</option>
			<option value="G">G</option>
			<option value="H">H</option>
			<option value="I">I</option>
		</select>
		<br>
		Selection To: 
		<select name="selectTo">
			<option value="A">A </option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="E">E</option>
			<option value="F">F</option>
			<option value="G">G</option>
			<option value="H">H</option>
			<option value="I">I</option>
		</select>
		<input type="submit">

	</form>

<pre>

<?php
// LA TOPOGRAPHIE
$points = [ // coordonnées x,y des noeuds
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

if (isset($_POST['selectTo'])&&(isset($_POST['selectFrom']))&&($_POST['selectTo'] != $_POST['selectFrom'])) {
	searchPaths($_POST['selectFrom'], $_POST['selectTo']);
	print_r($paths);
}else{
	echo("une erreur est survenue, merci de réessayer");

}



// FONCTION PRINCIPALE
function searchPaths($from, $to) {
	/* le mot-clé "global" permet d'accéder
	aux variables définies hors de la fonction ; la fonction
	peut ainsi modifier directement ces variables sans avoir à
	retourner quelque chose */
	global $paths; 
	global $point;
	global $noeuds; 	
	$paths = [$from]; // on initialise le point de départ
	

	do { // on commence forcément par faire quelque chose
		$pathsTmp = []; 
			/* ce tableau vide va nous  servir à stocker les parcours corrects calculés 
			à partir des parcours corrects figurants déjà dans $paths */
		$pathsL = count($paths); // nombre de parcours (ou de parties de parcours) déjà calculés

		for($i = 0; $i < $pathsL; $i++) { // parcourir tous ces parcours

			if(strpos($paths[$i], $to) === false) { // si le parcours ne contient pas la destination
				$etapes = $noeuds[substr($paths[$i], -1)];
					/* chercher le dernier noeud du parcours (le dernier caractère de la chaîne 
					définissant le parcours) ; la variable $etapes contient un tableau avec les noeuds 
					du dernier noeud */

				for($j = 0; $j < count($etapes); $j++) { // parcourir toutes ces étapes
					if(strpos($paths[$i], $etapes[$j]) === false) { // si l'étape n'a pas été déjà franchie (pas de retour en arrière)
						$pathsTmp[] = $paths[$i].$etapes[$j]; // ajouter l'étape à $pathTmp
					}
				}
			}
			else { // si le parcours contient la destination, on l'ajoute à $pathTmp
				$pathsTmp[] = $paths[$i];
			}
		}

		$paths = $pathsTmp; // les nouveaux parcours (avec les nouvelles étapes) remplacent les anciens

		foreach($paths as $path) { // parcourir toutes les parcours

			$continue = false; // pour sortir de la boucle while si on a pas encore tous les chemins
			if(strpos($path, $to) === false) { // si on n'a pas encore trouvé tous les chemins
				$continue = true; // on ne sort pas de la boucle while
				break; // pas la peine de tester toutes les valeurs, on sort de la boucle foreach
			}
		}
	}
	while($continue); // on continue tant qu'on n'a pas encore trouvé tous les chemins
}

 // appel de la fonction searchPaths

?>
<pre>

</pre>
</body>
</html>

