<?php
		session_start();
		if(isset($_SESSION['logged'])&&$_SESSION['logged']==true){
				$n = "";
		}else $n = "non";
?>
<html>
	<head>
		<title>Usauto - home</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="generalstyle.css">
		<style>
			P {text-align: center;}
		</style>
	</head>
	<body>
		<header>
			<h2 style="text-align: center;">BENVENUTO SU USAUTO</h2>
		</header>
		<nav>
			<a href="ricerca.php"><P>RICERCA AUTO</P></a>
			<a href="nannuncio.php"><P>NUOVO ANNUNCIO</P></a>
			<a href="login.php"><P>LOGIN</P></a>
			<a href="registra.php"><P>REGISTRAZIONE</P></a>
		</nav>
		<footer>
			<h3 style="margin-left: 10">Project for university course, 2019</h3>
			<h3 style="margin-left:10"><?php echo "login $n eseguito"; if($n=="") echo" utente " .$_SESSION['nome']. "<a href=\"logout.php\"> logout</a></h3>"; ?>
		</footer>

	</body>
</html>
