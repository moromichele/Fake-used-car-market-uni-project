<?php
		session_start();
		
		if(isset($_SESSION['logged'])&&$_SESSION['logged']==true){
				$url= 'logged.php';
				header('location: '.$url);
		}
?>

<html>	
	<head>
		<title>Usauto - login</title>
		<link rel="stylesheet" type="text/css" href="generalstyle.css">
	</head>
	<body>
		<header><h2 style="margin-left:10px; margin-bottom: 100px;">LOGIN</h2></header>
		
		<div id="myforms" style="height: 40%">
			<FORM action="logconfirm.php" method="post">
		
						<label for="nome">Nome utente</label>
						<input type="text" name="nome" required><br />
						
						<label for="psw">Password</label>
						<input type="password" name="psw" required><br />
						
						<INPUT type=submit value="Invia">
			</FORM>
		</div>
		
		<div style="height: 35%">
		<a href="registra.php"><P>Non sei registrato? clicca qui</P></a>
		</div>
		
		<footer>
		
			<div style="margin-left: 20px; "><a href="home.php">homepage</a></div>
			
		</footer>
	</body>
</html>