<!DOCTYPE html>
<html>
	<head>

		<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	</head>
	<body>
		<section>
			<script>
				/*console.log(petfinder);
				function fonctionSwitch(selectionAnimal){
					console.log('ok');
					document.getElementById('rechercheAnimal').innerHTML = '<h1>'+selectionAnimal+'</h1>';
				}*/
					//console.log('ok');

					/*document.getElementById("rechercheAnimal").innerHTML = "<table><tr><th>Catégorie</th><th>test</th></tr>"
					foreach(classique, cle	: valeur){
						if (cle == "image") {
							document.getElementById("rechercheAnimal").innerHTML += "<tr><td rowspan>";
							 foreach(image, cle2 : valeur2){
							 	print("image");
							 }
							 document.getElementById("rechercheAnimal").innerHTML += "</td></tr>"; 		  
						}else {
						}
					}*/</script>





				<form method="get" action="indexu.php?page=classique">
					<select name="animal"> 
						<option value="chat">Chat</option>
						<option value="chien">Chien</option>
						<option value="rongeurs">Rongeur</option>
					</select>

					<input type="submit">
					
				</form>
				<!-- 
				<button class="btn-primary" id='SelectCat' onclick="fonctionSwitch('chat');">Chat</button>
				<button class="btn-info" onclick="fonctionSwitch('chien');"> Chien</button> -->
				
				<p id="rechercheAnimal"></p>
				
			</section>
		</body>
	</html>