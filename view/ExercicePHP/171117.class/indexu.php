<?php

require_once('Personnage.class.php');

//$olivier = new Personnage('bestKiller');
//$olivier->nom='bestKiller';
//$matteo = new Personnage('alreadyDead');
//$matteo->nom='alreadyDead';
$marie = new Personnage('Sharkignogne', 'F', 0, 'mage');
$matteo = new Personnage('alreadyDead', 'H');
$olivier = new Personnage('bestKiller', 'H', 150, 'invocateur');
$marie->statutPerso();
$matteo->attaquer($marie);

/*$matteo->attaquer($olivier);
$matteo->attaquer($olivier);
$matteo->attaquer($olivier);
$olivier->heal($olivier);
$olivier->statutPerso();*/


?>