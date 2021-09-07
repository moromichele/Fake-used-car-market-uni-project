<?php
	//se si cerca di fare login/registrazione ma si è gia loggati
	session_start();
	echo "Login già eseguito, utente: " . $_SESSION['nome'];
	echo "<br />";
	echo "<a href=\"logout.php\">Log out</a><br />";
	echo "<a href=\"home.php\">Homepage</a>";
?>
