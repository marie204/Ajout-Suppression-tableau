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
<button onclick="fonctionNulle();"> Debug </button>

<p id="demo"></p>

<script>
	tableFruit = [];
	function fonctionFuitee(){
		d = document.getElementById("contenuUser").value;
		tableFruit.push(d);
		e= tableFruit.indexOf(d);

		document.getElementById("demo").innerHTML += d +"<button onclick='supprimeFruit(parseInt(e))'>Supprimer</button> <br>";
	}
	function supprimeFruit(s){
			console.log(s);
	}

		function fonctionNulle(){
			console.log(tableFruit);
		}
</script>


</body>
</html>