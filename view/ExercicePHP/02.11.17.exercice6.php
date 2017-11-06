<!DOCTYPE html>
<html>
	<head>
		<title>   Exercice 6	</title>
	</head>
	<body>
		
		<pre>
			<?php
			$x = 2;
			$compteur = 0;
			$premiers = [];
			while ($x < 100){
			#for ($x= 2; $x < 100 ; $x+=1) { 
				$maximale = $x;
				$denominateur = 2;
				while ($denominateur <= $maximale) {
					$reste = $x % $denominateur;
					if (($reste == 0) and ($denominateur != $x)) {
						break;
					}
					if ($denominateur == $maximale){
						$premiers[] = $x;
					}
					$denominateur > 2? $denominateur += 2 : $denominateur ++;
					$compteur = $compteur +1;
					

				}
				#$x++;
			$x > 2? $x+=2 : $x++ ;
			}
			var_dump($compteur);
			var_dump($premiers);
			
			?>
		</body>
	</html>