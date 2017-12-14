<section><p id="trouveMonP"></p></section>

<script>
	function fonctionMonAnimal(Q01, Q02){
		document.getElementById('trouveMonP').innerHTML = "Mon animal est le cochon d'inde Afghan. <br> Ce petit animal à la peau dur nés dans le désert vous permettra de partir plusieurs semaines sans avoir à vous soucier de son bien être. Très câlin lorsque son maître est proche, il bouge peu et très bruyamment, même dans ses tentatives de fugue, le cochon d'inde Afghan vous restera fidèle en vous le faisant savoir. Le cochon d'inde Afghan ne peut être plus parfait pour vos besoins, même vos enfants l'adoreront! <br> Venez acheter tout de suite et maintenant votre brand new Cochon d'Inde Afghan! Seulement 1500€ la bête, seulement maintenant et seulement pour vous! <br> <center><figure style='margin-bottom : 75px;'><img src='./image/cochondindeafghan.jpg'></img><figcaption>Votre brand new Cochon d'Inde Afghan vous attend chez nous maintenant! N'attendez plus!</figcaption></figure></center> "
	}

</script>

<?php
echo "<script>fonctionMonAnimal('".$_GET['Q01']."', '".$_GET['Q02']."');</script>";
?>
