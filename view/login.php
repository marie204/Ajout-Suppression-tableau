<!DOCTYPE html>
<html>
<head>
	<title>Page de Login</title>
</head>
<body>
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
?>

<section>
	<div class="row">
		<div class="col-4"></div>
	<div class="col-4" style="text-align: center">
	<form action="indexu.php?page=login" method="post">
		<h5>Login</h5><input type="text" name="log" maxlength="20">
		<br>
		<h5>Mot de passe</h5><input type="text" name="mdp" maxlength="20">
		<br>
		<input type="submit" value="se connecter" style="padding: 15px; margin: 15px">
		<div class="col-4"></div>
	</form>
</div></div>





<?php
	if((isset($_POST['log'])&&(isset($_POST['mdp'])))){
		echo'heeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeelllllllllllllllllllllllllllllooooooooooooooooooooooooooooo!!!!';
	}


?>



</section>


</body>
</html>


