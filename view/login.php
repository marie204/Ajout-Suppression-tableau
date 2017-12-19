


<section>
	<div class="row">
		<div class="col-4"></div>
	<div class="col-4" style="text-align: center">
	<form action="./controller/login.php" method="post">
		<?php
		if(isset($_GET['etat']) && ($_GET['etat']=='erreur')){
		echo '<br><p class="paraErreur centray">Identifiant ou mot de passe incorrect!</p>';
		}
		if(isset($_SESSION['content'])){
			echo 'Felicitation '.$_SESSION['content']. "! Vous êtes connecté(e)!";
		?>
		<input type="submit" value="Me deconnecter">
		<?php
		}else{


		?>
		<h5>Login</h5><input type="text" name="log" maxlength="20" required>
		<br>
		<h5>Mot de passe</h5><input type="password" name="mdp" maxlength="20" required>
		<br>
		<input type="submit" value="se connecter" style="padding: 15px; margin: 15px">
		<div class="col-4"></div>
		<?php
		}


		?>
	</form>
</div></div>





<?php


?>



</section>


</body>
</html>


