<?php
	//richiedi login per funzioni limitate a utenti loggati (nuovo annuncio)
	session_start();
	echo"Hai provato ad usare una funzione riservata agli utenti registrati<br />";
	echo"<a href=\"login.php\">Esegui login</a><br />";
	echo"<a href=\"registra.php\">Registrazione</a><br />";
	echo"<a href=\"home.php\">Homepage</a>";
	
?>