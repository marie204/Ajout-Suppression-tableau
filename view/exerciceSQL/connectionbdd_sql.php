<!DOCTYPE html>
<html>
<head>
	<title>ffefr</title>
</head>
<body>

	<?php
	$bdd = new PDO('mysql:host=localhost;dbname=dcw_touring;charset=utf8',"root",'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$id_hotel  = htmlspecialchars(1);

	if (isset($_POST['monNombre'])) {
		$id_hotel = htmlspecialchars($_POST['monNombre']);
		$req = $bdd->prepare(
		"SELECT hotels.name, hotels.id_hotel
		FROM hotels
		WHERE hotels.id_hotel = $id_hotel");
	$req->execute(array('id_hotel'=>$id_hotel));
	echo "<pre>";
	while($line = $req->fetch()){ //FETCH = Aller chercher : affiche les résultats SQL ligne par ligne
	print_r($line);
	}
	echo "</pre>";
	$req->closeCursor();
}



	?>

</body>
</html>