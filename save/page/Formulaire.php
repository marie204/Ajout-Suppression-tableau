<!doctype html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Projet stagiaire</title>
		<link rel="stylesheet" href="../script/style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	</head>
	<body>
		<form action="Trouvemonanimal.php">
			<fieldset class="irradie">
				Ceci est une première question. <br>
				<label for="Q01R01"> <input type="radio" name="Q01"> Ceci est une première réponse </label> <br>
				<label for="Q01R02"> <input type="radio" name="Q01"> Ceci est une seconde réponse </label><br>
				<label for="Q01R03"> <input type="radio" name="Q01"> Ceci est une troisième réponse </label>
			</fieldset>
			<br>
			<fieldset class="irradie">
				Ceci est une seconde question<br>
				<label for="Q002R01"> <input type="radio" name="Q02"> Ceci est une première réponse</label><br>
				<label for="Q002R02"> <input type="radio" name="Q02"> Ceci est une seconde réponse</label><br>
				<label for="Q002R03"> <input type="radio" name="Q02"> Ceci est une première réponse</label><br>
			</fieldset>

			<br><br>
			<input type="submit" name="Valider" >
			
		</form>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>