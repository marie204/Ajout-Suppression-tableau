<?php

require_once('Personnage.class.php');
require_once('Ville.class.php');


$monqut= new Ville('Moncuq', 'La Manche');
$monqut->phrasinVilleDep();

$jean = new People('Jean', 'JeanJean', '4 rue du <h4> Moncuq <br> ');
$a = $jean->getPersonne();
echo $a;
$jean->setAdress('8 rue des eglantiers 15462 Moncuq');
$a = $jean->getPersonne();
echo $a;
//$olivier = new Personnage('bestKiller');
//$olivier->nom='bestKiller';
//$matteo = new Personnage('alreadyDead');
//$matteo->nom='alreadyDead';
/*$marie = new Personnage('Sharkignogne', 'F', 15, 'mage');
$matteo = new Personnage('alreadyDead', 'H');
$olivier = new Personnage('bestKiller', 'H', 150, 'invocateur');
$marie->statutPerso();
$matteo->attaquer($marie);
$olivier->heal($marie);*/

/*$matteo->attaquer($olivier);
$matteo->attaquer($olivier);
$matteo->attaquer($olivier);
$olivier->heal($olivier);
$olivier->statutPerso();*/


?>