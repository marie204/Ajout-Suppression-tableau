<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<section>
			<script>
				
				selectionAnimal = "";
				function fonctionSwitch(selectionAnimal){
					//console.log('ok');

					document.getElementById("rechercheAnimal").innerHTML = "<table><tr><th>Catégorie</th><th>test</th></tr>"
					foreach(classique, cle	: valeur){
						if (cle == "image") {
							document.getElementById("rechercheAnimal").innerHTML += "<tr><td rowspan>";
							 foreach(image, cle2 : valeur2){
							 	print("image");
							 }
							 document.getElementById("rechercheAnimal").innerHTML += "</td></tr>"; 
								
							  
						}else {

						}

					}

						
					}
				
					
					
				</script>
				
				<button class="btn-primary" id='SelectCat' onclick="fonctionSwitch('chat');">Chat</button>
				<button class="btn-info" onclick="fonctionSwitch('chien');"> Chien</button>
				
				<p id="rechercheAnimal">test</p>
				
			</section>
		</body>
	</html>