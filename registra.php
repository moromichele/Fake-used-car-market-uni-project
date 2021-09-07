<?php
		session_start();
		
		if(isset($_SESSION['logged'])&&$_SESSION['logged']==true){
				$url= 'logged.php';
				header('location: '.$url);
		}
?>

<html>	
	<head>
		<title>Usauto - registrazione</title>
		<link rel="stylesheet" type="text/css" href="generalstyle.css">
	</head>
	<body>
		<header><h2 style="margin-left:10px; margin-bottom: 100px;">REGISTRAZIONE</h2></header>
		
		<div id="myforms" style="height: 75%">
			<FORM action="regconfirm.php" method="post">
						<label for="nome">Nome utente</label>
						<input type="text" name="nome" required>
						
						<label for="psw">Password</label>
						<input type="password" name="psw" required>
						
						<label for="psw2">Reinserisci password</label>
						<input  type="password" name="psw2" required>
						
						<label for="email">Email</label>
						<input type="text" name="email" required>
						
						<label for="teln">Telefono</label>
						<input type="text" size="10" maxlength="10" name="teln" required>
						
						<label for="cap">CAP</label>
						<input type="text" size="5" pattern=".{5,5}" maxlength="5" name="cap" required>
						
						<INPUT type=submit value="Invia">
			</FORM>
		</div>
		
		<footer>
			<div style="margin-left: 20px; "><a href="home.php">homepage</a></div>
			<div style="margin-left: 20px; "><a href="login.php">login</a></div>
		</footer>
	</body>
</html>