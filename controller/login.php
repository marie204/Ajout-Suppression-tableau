<?php
session_start();
//setcookie("login", $_POST['log']);
header('../indexu.php');
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
	"61009" => "tho.mas",
	"66666" => "admin",
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
	"61009" => "Thomas",
	"66666" => "admin",
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
	"61075" => "chatTroMignon",
	"61091" => "runningAfterWomen",
	"61033" => "007",
	"61009" => "OhMyGod!",
	"66666" => "admin",
];

if(isset($_SESSION['content'])){
	$_SESSION['content'] = null;
	header('Location: ../indexu.php');

}else{

		if( isset($_POST['log'])&&(isset($_POST['mdp'])) ) {
			$key = testUser($_POST['log'], $userLogin);
			$key = testMdp($key, $_POST['mdp'], $userPassword);
			if($key == 'erreur'){
				header('Location: ../indexu.php?page=login&etat=erreur');
			}else{
				setcookie($userName[$key]);
				$_SESSION['content']=$userName[$key];
				header('Location: ../indexu.php');
	}
	}}

function testUser($userName, $userLogin){
	$key = array_search($userName, $userLogin);
	if ($key == null) {
		return 'erreur';
	}else {
		return $key;
	}
} 

function testMdp($key, $userMdp, $userPassword){
	if ($userPassword[$key] == $userMdp){
		return $key;
	}else{
		return 'erreur';
	}	
}

?>
