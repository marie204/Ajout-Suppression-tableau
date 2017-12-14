
<section id="corpsDocs">test</section>



<script>
	//TODO Debugguer soucis du foreach! 
	//TODO Terminer la possibilité pour l'utilisateur de créer des pages. 
	$tableContenu = [];
	$tableTitre = [];
	$userName = [];
	$prodDate = [];
	$lastMod = [];
	fonctionGeneration($tableContenu);
	function fonctionGeneration(){
		console.log('shoot');
		$monCompte = fonctionCompte();
		if ($monCompte > 0){
			console.log('Marche');
		}else{
			document.getElementById('corpsDocs').innerHTML = "Rien à afficher ici pour le moment! Brandissez votre compte utilisateur pour changer ça!";
		}
	};
	
	function fonctionCompte($tableContenu)
	{
		a = 0;
		foreach($tableContenu as $myKey){
			$a += 1;
		}
	}
	return $a;
</script>