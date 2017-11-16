		
		<script>
			function fonctionVerif(){
				console.log("hello there, how are you?");
			}
			
		</script>
		<section>
		<form action="indexu.php?page=trouvemonanimal" method="get">
		<input type="hidden" name="page" value="trouvemonanimal">
				A quel fréquence êtes vous chez vous? <br>
			<fieldset class="irradie">
				<label for="Q01R01"><input type="radio" name="Q01" value="Q01R01"> Tout le temps </label> <br>
				<label for="Q01R02"><input type="radio" name="Q01" value="Q01R02"> Une fois toutes les deux semaines environ </label><br>
				<label for="Q01R03"><input type="radio" name="Q01" value="Q01R03"> Une fois par an </label><br>
			</fieldset>

			
			<br>
			Quelle qualité doit avoir votre animal?
			<fieldset class="irradie">
				<label for="Q02R01"><input type="radio" name="Q02" value="Q02R01"> L'affection </label> <br>
				<label for="Q02R02"><input type="radio" name="Q02" value="Q02R02"> La fidélité </label><br>
				<label for="Q02R03"><input type="radio" name="Q02" value="Q02R02"> Le calme </label><br>
			</fieldset>
			<br><br>
			<input type="submit" onclick="fonctionVerif();">
			
		</form></section>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
