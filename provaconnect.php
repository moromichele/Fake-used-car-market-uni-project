<?php
	$user = 'root';
	$pass = '';
	$db = 'testdb';
	
	$conn = mysqli_connect('localhost',$user,$pass,$db);
	
	if(!$conn) {
		echo "<h1>Database connection problems</h1>".mysqli_connect_error().
             "<a href=\"home.html\">Home</a><br />".
             
		die();
	}
?>