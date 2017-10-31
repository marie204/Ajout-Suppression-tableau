<!DOCTYPE html>
<html>
	<head>
		<title>exercice du jour</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>
		Exercice 01
		</h1>
		<!-- capacité utilisateur ajout mot dans un tableau et l'affiche.
		ajout bouton supprime fruit.
		ajoute bouton debug qui affiche contenu tableau -->
		<input type="text" id="contenuUser" onkeypress="entree();">
		<button onclick="fonctionFuitee();"> test </button>
		<button onclick="fonctionNulle();"> Debug </button>
		<p id="demo"></p>
		<script>
			tableFruit = [];
			function fonctionFuitee(){
				d = document.getElementById("contenuUser").value;
				tableFruit.push(d);
				e= tableFruit.indexOf(d);
				document.getElementById("demo").innerHTML += d +"<button onclick='supprimeFruit("+e+")'>Supprimer</button> <br>";
			}

			function supprimeFruit(s){
					tableFruit.splice(s,1);
					f = tableFruit.length;
					x = 0;
					document.getElementById("demo").innerHTML= "";
					while (x != f+1) {
						if (tableFruit[x] != null){
							document.getElementById("demo").innerHTML = document.getElementById("demo").innerHTML + tableFruit[x]+"<button onclick='supprimeFruit("+x+")'>Supprimer</button> <br>";
						
						} 
						x= x+1;
					}
				}
				function entree(){
						if (event.keyCode == 13) {
							fonctionFuitee();
						}
				}

				function fonctionNulle(){
					console.log(tableFruit);
				}
		</script>
	</body>
</html>