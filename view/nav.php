<link rel="stylesheet" href="./style/styleNav.css" >
<center><div class="btn-group" role="goup">
	<a class="btn btn-light" <?php echo $accueilON ?>href="indexu.php?page=accueil" role="button">Accueil</a>
	<a class="btn btn-light" <?php echo $reptileON ?> href="indexu.php?page=reptile" role="button">A écaille</a>
	<a class="btn btn-light" <?php echo $classiqueON ?> href="indexu.php?page=classique" role="button">A poil</a>
	<a class="btn btn-light" <?php echo $oiseauON ?> href="indexu.php?page=oiseau" role="button">A plume</a>
	<a class="btn btn-light" <?php echo $formulaireON ?> href="indexu.php?page=formulaire" role="button">Quel animal pour moi?</a>
	<a class="btn btn-light" <?php echo $login ?> href="indexu.php?page=login" role="button"> <?php if(isset($_SESSION['content'])){ ?> Me déconnecter <?php }else{ ?> login <?php } ?> </a>
	
</div></center>