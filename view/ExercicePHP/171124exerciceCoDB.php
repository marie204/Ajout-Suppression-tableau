

<?php
//connection à la base de donnée
$bdd = new PDO('mysql:host=localhost;dbname=dcw_touring;charset=utf8',"root",'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$id_hotel  = htmlspecialchars(1);
//$id_hotel2  = htmlspecialchars(1);
?>
<form action="171124exerciceCoDB.php" method="post">
	<input type="number" name='monNombre' required>
<script>
	
</script>
<select id="fished">

<?php
$req2 = $bdd->prepare("SELECT hotels.name, hotels.id_hotel FROM hotels;");
$req2->execute();

print_r($req2);
?>

</select>
<input type="submit"></form>
<?php


//tentative d'injection SQL $id = "6 ou 1=1"

//AVEC PREPAEATION (bonne méthode) ==> préparation de la requête SQL (neutralisation des injections)


/*$darn00 = $req2.length();
for($i = 0; $i <= $darn00; $i++){

}
*/


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

$req2->closeCursor();

/*$req = $bdd->prepare(
"SELECT hotels.id_hotel, hotels.name
FROM hotels
"); //WHERE id_hotel = :id_hotel*/
/*$req->execute(array(//==> execution de la requ^^ete (DANS UN 2ème temps)
'id_hotel' => $id_hotel
));*/
 //FERMETURE DE LA REQUETE )(la conncetion à la base est fermée à la fin du script)

?>