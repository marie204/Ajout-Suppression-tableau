<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
<table class="table table-stripped table-bordered table-inverse">
	<tr>
		<th>User ID</th>
		<th>User Login</th>
		<th>User Name</th>
		<th>User Password</th>
	</tr>
	<?php
	function printData($id, $login, $name, $password) {
		if(strlen($login) > 8) $class= " class='bg-warning'";
		else $class="";
		echo "<tr$class><td>$id</td><td>$login</td><td>$name</td><td>$password</td></tr>";
	}

	function tri($tabModele) {
		global $userLogin;
		$tmp = [];
		foreach ($tabModele as $key => $value) {
			$tmp[$key] = $userLogin[$key];
		}
		return $tmp;
	}

	$tableau = $userLogin;
	ksort($tableau);
	if(isset($_GET)) {
		
		switch ($_GET['select']) {
			case 'userid':
				ksort($userLogin);
				break;
			case 'userlogin':
				asort($userLogin);
				break;			
			case 'username':
				asort($userName);
				$userLogin = tri($userName);
				break;
			case 'userpassword':
				asort($userPassword);
				$userLogin = tri($userPassword);
				break;			
			default:
				ksort($userLogin);
				break;
		}
	}

	foreach ($userLogin as $id => $value) {
		printData($id, $value, $userName[$id], $userPassword[$id]);
	}
	?>

</table>
<form action="index.php" method="get">
	<select name="select">
		<option value="userid">User ID</option>
		<option value="userlogin">User Login</option>
		<option value="username">User Name</option>
		<option value="userpassword">User Password</option>
	</select>
	<br>
	<input type="submit"></input>
</form>