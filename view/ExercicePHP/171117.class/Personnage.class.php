<?php 
class Personnage{
	private $nom;
	private $vie;
	private $classe;
	private $genre;
	//public $chance = 0;

	public function __construct($test, $genre, $vie=50, $classe='guerrier'){
		$this->nom=$test;
		$this->vie=$vie;
		$this->classe=$classe;
		$this->genre=$genre;
	}

	public function getNom(){
		return $this->nom;
	}
	public function getVie(){
		return $this->vie;
	}
	public function getClasse(){
		return $this->classe;
	}
	public function getGenre(){
		return $this->genre;
	}



	public function monGenre(){
		$a = $this->genre == 'F' ? 'e femme' : ' homme';
		echo 'Je suis un'.$a;
	}

	public function statutPerso(){
		$vivant = $this->vie == 0 ? "MORT" : 'VIVANT';
		$a = $this->genre == 'F' ? 'E' : '';
		echo "Je m'appelle $this->nom et je suis $vivant".$a.".<br>";

		/*if($this->vie == 0){
			echo "Je m'appelle $this->nom et je suis MORT";
		}else {
			echo "Je m'appelle $this->nom et je suis VIVANT";
		}*/
	}

	public function attaquer($takay){
		if ($takay->vie == 0) {
			echo $takay->genre == 'F' ? 'La joueuse '.$takay->nom.' est déjà morte!' : 'Le joueur '. $takay->nom. ' est déjà mort!';
			echo "<br>";
		}else{
			$takay->vie -= 1 ;
			echo 'L.e.a joueu.r.se '.$this->nom.' vient d\' attaquer l.e.a joueu.r.se '.$takay->nom.'. i.e.l.le a perdu 1 point de vie. <br>';
		}
		
	}
	public function heal($healay){
		$healay->vie++;
		echo "$this->nom vient de soigner $healay->nom.<br>";
	}


}


?>