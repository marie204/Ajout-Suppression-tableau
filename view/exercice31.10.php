<!DOCTYPE html>
<html>
<head>
	<title>exercice du jour</title>
</head>
<body>
<h1>
	Exercice 01
</h1>
<!-- capacité utilisateur ajout mot dans un tableau et l'affiche. 
ajout bouton supprime fruit. 
ajoute bouton debug qui affiche contenu tableau -->

<input type="text" id="contenuUser">
<button onclick="fonctionFuitee();"> test </button>

<p id="demo">test</p>

<script>
	function fonctionFuitee(){
		document.getElementById("demo").innerHTML = "testu";
	}


</script>


</body>
</html>