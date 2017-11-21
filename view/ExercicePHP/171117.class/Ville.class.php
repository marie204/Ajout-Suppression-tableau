<?php

class Ville {

	private $nom;
	private $departement;

	public function __construct ($nom, $departement){
		$this->nom=$nom;
		$this->departement=$departement;
	}

	public function getNom(){
		return $this->nom;
	}
	public function getDepartement(){
		return $this->departement;
	}

	public function phrasinVilleDep(){
		echo "La ville de ".$this->nom." se trouve dans le département de ".$this->departement.". <br>";
	}

}
 class People{
 	private $name;
 	private $first_name;
 	private $adress;
 	
 	public function __construct($first_name, $name, $adress){
 		$this->first_name=$first_name;
 		$this->name=$name;
 		$this->adress=$adress;
 	}
 	public function getName(){
 		return $this->name;
 	}
 	public function getAdresse(){
 		return $this->adress;
 	}
 	public function setAdress($monAdresse){
 		$this->adress = $monAdresse;
 	}

 	public function getPersonne(){
 		return $this->first_name .' '. $this->name .' '. $this->adress;
 	}
 }


?>