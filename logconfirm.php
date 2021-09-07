<?php
	session_start();
	$nome = $_POST['nome'];
	$psw = $_POST['psw'];
	
	//utente admin per test senza mysql
	if($nome=="admin"&&$psw=="admin"){
		echo "Login confermato  <br />";
		$_SESSION['logged']=true;
		$_SESSION['nome']=$nome;
		$_SESSION['id'] = '99';
		echo "<a href=\"home.php\">torna alla home</a>";
	}else {
		require "provaconnect.php";
		$query = "select * from utenti WHERE nome='".$nome."' AND password='".$psw."' limit 1";
		$result = mysqli_query($conn,$query);
		
		if(!$result) {
						echo "Database error: ".mysqli_error($conn)."<br />";
					} else  {
						if(mysqli_num_rows($result)==1){	
							echo "Login confermato  <br />";
							$row = mysqli_fetch_array($result);
							$_SESSION['id'] = $row['id'];
							$_SESSION['logged']=true;
							$_SESSION['nome']=$nome;
							echo "<a href=\"home.php\">torna alla home</a>";
						} else echo"Login errato, <a href=\"login.php\">ritenta</a>";
					} 
                // close DB connection
                mysqli_close($conn);
	} 
	
	
	
?>