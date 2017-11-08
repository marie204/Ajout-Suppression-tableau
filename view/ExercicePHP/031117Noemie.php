<?php setcookie('noemieFirstname', '', time()+60*60*24*364, '/', false, false)?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
		<title>Exercice 8</title>
	</head>
	<body>
		<form method="post" action="031117Noemie.php">
			<input type="text" name="name" value="John Smith"><br>
			<input type="text" name="noemie" value='Question'>
			<input type="submit">
		</form>





		<?php
			if (isset($_POST['name']) && ($_POST['name'] != '') ) {
				$_COOKIE['noemieFirstname'] = ($_POST['name'] ) ;
			}
		
			/*if ( isset($_POST['name'] ) && ($_COOKIE['noemieFirstname'] == '' ))  {
				$_COOKIE['noemieFirstname'] = ($_POST['name'] ) ;
			}*/

			//if (($_COOKIE['noemieFirstname'] != '') and (isset($_POST['noemie']) ) ) {
			if (isset($_POST['noemie'])){
				$a = talkToNoemie($_POST['noemie'], $_COOKIE['noemieFirstname']);
				echo "$a";
			}
		/*if( (!isset( ($_COOKIE['noemieFirstname']) or $_COOKIE['noemieFirstname'] == '' ) ) ) {
			if (isset($_POST['noemie'] ) ) {
				$_COOKIE['noemieFirstname'] = ($_POST['noemie'] ) ;
				echo "Merci de nous avoir donné votre nom";
			} else{
				if (isset($_POST['noemie'])){
					$a = talkToNoemie($_POST['noemie']);
					echo "$a";
				}
			}
			
			
			}*/
		
		/*if(!isset($_COOKIE['noemieFirstname'])){
			echo "Pour utiliser Noémie, merci de nous donner votre nom";
				#setcookie($cookie_name, $cookie_value);
		} else {
			
		}*/
		
		
		function talkToNoemie($chaine, $name){
			$chaine = strtolower($chaine);
			switch ($chaine) {
				case strpos($chaine, 'idiote'):
				case strpos($chaine, 'merde'):
				case strpos($chaine, 'crétine'):
				case strpos($chaine, 'stupide'):
				case strpos($chaine, "t'es inutile"):
					return "Ne me parlez pas ainsi!";
					break;
				case strpos($chaine, 'iphone'):
					return "Oh.";
					break;
				case strpos($chaine, 'parking'):
					return "Notre parking est payant!";
					break;
				case strpos($chaine, 'bonjour'):
					return "Bonjour à vous aussi!";
					break;
				case strpos($chaine, 'rien'):
					return "Oh.";
					break;
				case strpos($chaine, "rouge"):
				case strpos($chaine, "red"):
					return "Très bien"."<style> body { background-color : red}</style>";
					break;
				case strpos($chaine, "vert"):
				case strpos($chaine, "green"):
					return "Très bien"."<style> body { background-color : green}</style>";
					break;
				case strpos($chaine, "bleu"):
				case strpos($chaine, "blue"):
					return "Très bien"."<style> body { background-color : blue}</style>";
					break;
				case strpos($chaine, "jaune"):
				case strpos($chaine, "yellow"):
					return "Très bien"."<style> body { background-color : yellow}</style>";
					break;
				case strpos($chaine, "chaton"):
				case strpos($chaine, "chat"):
				case strpos($chaine, "chien"):
				case strpos($chaine, "chiot"):
					return '<iframe width="560" height="315" src="https://www.youtube.com/embed/nGUEigjtJg0" frameborder="0" allowfullscreen></iframe>';
					break;
				case strpos($chaine, "comment vas-tu"):
				case strpos($chaine, "comment allez vous"):
				case strpos($chaine, "comment va-tu"):
				case strpos($chaine, "comment va tu"):
				case strpos($chaine, "comment vas tu"):
				case strpos($chaine, "comment allez-vous"):
				case strpos($chaine, "comment vous allez"):
				case strpos($chaine, "tu vas bien"):
				case strpos($chaine, "tu va bien"):
				case strpos($chaine, "vous allez bien"):
				case strpos($chaine, "vous allais bien"):
				case strpos($chaine, "vous allé bien"):
				case strpos($chaine, "ca va"):
				case strpos($chaine, "ça va"):
					return "Très bien et vous?";
					break;
				case strpos($chaine, "très bien"):
				case strpos($chaine, "très bien"):
				case strpos($chaine, "bien"):
				case strpos($chaine, "génial"):
				case strpos($chaine, "genial"):
					return "Je suis contente de l'entendre.";
					break;
				case strpos($chaine, "pas bien"):
				case strpos($chaine, "pas très bien"):
				case strpos($chaine, "moyen"):
				case strpos($chaine, "très moyennement"):
					return "Très bien.";
					break;
				case strpos($chaine, "quel est ton nom"):
				case strpos($chaine, "comment tu t'appelles"):
				case strpos($chaine, "c koi tn nm"):
					return "Je m'appelle Noémie";
					break;
				case strpos($chaine, "donne moi l'heure"):
				case strpos($chaine, "quelle heure est il"):
					$a = date('h:i');
					return "Il est actuellement ". $a.".";
					break;
				case strpos($chaine, "comment je m'appelle"):
					return "vous vous appelez ".$name;
					break;
				
				default:
					return "Bonjour ".$name."! Posez moi une question!";
					break;
			}
			
		}
		
		?>
	</body>
</html>