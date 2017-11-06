<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<title>Exercice 2</title>
</head>
<body>
	<form action="02.11.17.exercice5.php" method="post">
		<select name="selection01">
			<option value="UserID"> User ID</option>
			<option value="UserLogin"> User Login</option>
			<option value="UserName"> User Name</option>
			<option value="userPassword"> User Password</option>
		</select>
		<br>
		<input type="submit">
	</form>

	<?php

	


$userLogin = [
	"61046" => "an.nie",
	"61022" => "cle.ment",
	"61079" => "fran.cois",
	"61088" => "christo.pher",
	"61017" => "nico.las",
	"61002" => "ja.son",
	"61044" => "bap.tiste",
	"61063" => "mic.kael",
	"61099" => "thier.ry",
	"61011" => "lau.rent",
	"61085" => "ter.ry",
	"61075" => "ma.rie",
	"61091" => "mat.teo",
	"61033" => "re.naud",
	"61009" => "tho.mas"
];

$userName = [
	"61046" => "Annie",
	"61022" => "Clément",
	"61079" => "François",
	"61088" => "Christopher",
	"61017" => "Nicolas",
	"61002" => "Jason",
	"61044" => "Baptiste",
	"61063" => "Mickaël",
	"61099" => "Thierry",
	"61011" => "Laurent",
	"61085" => "Terry",
	"61075" => "Marie",
	"61091" => "Matteo",
	"61033" => "Renaud",
	"61009" => "Thomas"
];

$userPassword = [
	"61046" => "tatooCompris",
	"61022" => "godOfCSS",
	"61079" => "geisha61",
	"61088" => "superman",
	"61017" => "kikiLaPetiteSorcière",
	"61002" => "marioLover",
	"61044" => "glouglou",
	"61063" => "Coin-Coin",
	"61099" => "autoDealer",
	"61011" => "touchePasAmonPoste",
	"61085" => "perduDansLespace",
	"61075" => "chatsTropMignons",
	"61091" => "runningAfterWomen",
	"61033" => "007",
	"61009" => "OhMyGod!"
];

	switch ($_POST['selection01']) {
		case 'UserID':
			ksort($UserID);
			break;
		case 'UserLogin':
			asort($UserLogin);
			break;
		case 'UserName':
				asort($userName);
			break;
		case 'userPassword':
				echo"Pas implimenté encore";
			break;
		default:
			ksort($UserID);
			break;
	}

echo "<table class='table table-dark'><tr><th>UserID</th><th>User Login</th><th>User Name</th><th>User Password</th></tr>";
ksort($userLogin);
foreach($userLogin as $cle => $valeur){
	$f = strlen($userLogin[$cle]);
	if ($f > 8) {
		$bg = "bg-warning";
	} else{
		$bg = "";
	}
	remplissage($cle, $userLogin[$cle], $userName[$cle], $userPassword[$cle], $bg);
}


function remplissage($cleU, $userN, $userL, $userP, $background){
	echo("<tr class='$background'><td>$cleU</td><td>$userN</td><td>$userL</td><td>$userP</td></tr>");
}


	?>
</body>
</html>