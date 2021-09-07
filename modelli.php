<?php
	//per generare select marche/modelli 
	$marche = array(	
					"Ferrari"=>array("360","F430","458","488"),	
					"Lamborghini"=>array("Miura","Gallardo","Murcielago")
				);
	$subject = array_keys($marche);  					 
	//echo $subject[1]; risultato = Lamborghini (marche)
	//echo $marche[$subject[1]][2]; //risultato = Murcielago (modelli)
	//echo sizeof($marche); = 2 	(marche)
	//echo sizeof($marche,1); = 8 (marche + modelli)
	//echo sizeof($marche[$subject[1]]); = 3 (quanti modelli ha una marca)
?>