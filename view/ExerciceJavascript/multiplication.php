
<style>
	section{
		background-color: white;
	}
</style>
<h1>Exercice du 30/10</h1>
	<section>
	<?php
	var_dump($_POST);
	?>
	<form action="../view/multiplication.php" method="post" onsubmit="validerFormulaire();" target="_blank">
	nom: <input type="text" id="monNom">
	prénom : <input type="text" id="monPrenom">
	email: <input type="text" id="monEmail">
	<input type="submit" value="envoyer le formulaire">
</form>
<script>
	function validerFormulaire(){
		var a = document.getElementById(monPrenom).value;
		if ( true) {
			console.log(a)
		return true;
		console.log("false");
			
	} else{
		return false;
		console.log("true");
	}
}
</script>
</section>

		<!-- <section>
		<h1>Table de multiplication</h1>
		<button id="buttonMultiple" onclick="fonctionTable();">Afficher table</button>		
		<input type="number" id="inputMultiple" onkeypress="fonctionTableKey();" ><br>
		<button onclick="vider();">Vider le cache</button>
		
		
		<p id="trucmuche"></p>
		<script>
		function fonctionTableKey(){
				if (event.keyCode == 13){
					fonctionTable();
				}
			}
			function vider(){
				document.getElementById("trucmuche").innerHTML ="";
		
			}
			function fonctionTable(){
				let x2 = 0
				let F = document.getElementById("inputMultiple").value;
				for(x2 = 0; x2 <= 10; x2++){
					document.getElementById("trucmuche").innerHTML += F + "*" +x2+"=" +(F*x2)+"<br>";
				}
		
			}
		
		</script> -->
<!-- 
</section>
		<section>
		<h1>Plus Moins</h1>
		<input type="number" id="qqch" onkeypress="FonctionAlea();">
		<button id="button5" onclick="FonctionAleareal();"> test</button>
		<br>
		<button onclick="NouveauAlea();">Nouvelle partie</button>
		<script>
			var nbAlea = Math.round(Math.random()*100);
			var z = 0;
			function FonctionAlea(){
				if (event.keyCode == 13){
					FonctionAleareal();
				}
			}
			function NouveauAlea(){
				nbAlea = Math.round(Math.random()*100);
				z = 0;
				document.getElementById("button5").innerHTML = "test";
			}
			
			function FonctionAleareal(){
				MonNb = document.getElementById("qqch").value;
				z++;
				if(MonNb < nbAlea){
					document.getElementById("button5").innerHTML = "plus"
				} else if (MonNb == nbAlea){
					document.getElementById("button5").innerHTML = "gagné en "+z+" coups"
				} else{
					document.getElementById("button5").innerHTML = "Moins"
				}
			}
				
		</script>
	</section>
		<h1>Exercice 2</h1>
		<ul id="test">
		</ul>
		<input type="text" id="connard" onkeypress="Enter13();">
		<button onclick="maFonction();">Test</button>
		<section>
		<script>
			function maFonction(){
				document.getElementById("test").innerHTML = document.getElementById("test").innerHTML +"<li>"+ document.getElementById('connard').value+"</li>";
				}
				//document.write("<li>"+document.getElementById('connard').value+"</li>");
			//console.log(document.getElementByid(connard))
			function Enter13(){
				if (event.keyCode == 13) {
					maFonction();
				}
			}
		
		</script></section> -->
		<!-- <h1>
		Multiplication
		</h1>
		<script>
			var x = 0;
			for (x = 0; x<=10; x++) {
				document.write('<h2> Table des '+x+'</h2>');
				for (y = 0; y<=10; y++){
					a = x*y;
					document.write(x+"x"+y+"="+a+'<br>');
				}
			}
		</script> -->