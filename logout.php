<?php
	//log out e reindirizzamento alla home
	session_start();
	session_destroy();

	$url= 'home.php';
	header('location: '.$url);

?>