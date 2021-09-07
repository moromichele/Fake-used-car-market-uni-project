<?php


	$name = $_POST['nome'];
	$psw = 	$_POST['psw'];
	$psw2 = $_POST['psw2'];
	$mail = $_POST['email'];
	$tel = $_POST['teln'];
	$cap = $_POST['cap'];
	
	

	if($psw!=$psw2){
			echo"<P>Errore: le due password non sono uguali <a href=\"home.php\">
					torna alla home</a></P>";
	}else{
		
		echo "INSERT into utenti values ('','$name','$psw','$mail','$tel','$cap')";
		echo "<br /><a href=\"home.php\">torna alla home</a>";
		/*
		require "provaconnect.php";
		$query = "INSERT into utenti values ('','$name','$psw','$mail','$tel','$cap')";
		$result = mysqli_query($conn,$query);
	
		if(!$result) {
						echo "Database error: ".mysqli_error($conn)."<br />";
					} else {
						echo "Registrazione completa <br />";
						echo "<a href=\"login.php\">esegui login</a>";
					}
                // close DB connection
                mysqli_close($conn);
		*/
	}
	
?>