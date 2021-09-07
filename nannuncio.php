<?php
	session_start();
	
	if(!isset($_SESSION['logged'])){
				$url= 'logpls.php'; //richiedi log in per accedere
				header('location: '.$url);
	}
		
	include 'modelli.php';
	$curryear = date("Y"); //anno corrente
	
?>

<html>
	<head>
		<title>Usauto - inserisci annuncio</title>
		<link rel="stylesheet" type="text/css" href="generalstyle.css">
		<script src="noscript.js"></script>
	</head>
	<body onload="setHandlers()">
		<header><h2 style="margin-left:10px; margin-bottom: 100px;">NUOVO ANNUNCIO</h2></header>
		
		<div id="myforms" style="height: 75%">
			<FORM action="anninsert.php" method="post" >
					<label for="marca">Marca</label>
					<select name="marca" id="sel" required>
							<option selected disabled hidden>Seleziona marca</option>
						<?php
								
								for($i=0; $i<sizeof($marche); $i++){
									if(isset($_GET["mkr"])){
											if($subject[$i]==$_GET["mkr"]){
													echo "<option selected=\"selected\">$subject[$i]</option>";
											}else echo "<option>$subject[$i]</option>";
									}else echo"<option>$subject[$i]</option>";
								}
						?>
					</select><br />
			
					<label for="model">Modello</label>
					<select name="model" id="modelli" required>
						<?php
							if(!isset($_GET["mkr"])){
								echo"<option selected disabled hidden>Marca non selezionata</option>";
							}else{
								echo"<option selected value=\"tutti\">Seleziona modello</option>";
								for($i =0; $i<sizeof($marche[$_GET["mkr"]]); $i++){
										$modello = $marche[$_GET["mkr"]][$i];
										echo"<option>$modello</option>";
								}
							}
						?>
					</select><br />
					
					<label for="yr">Anno</label>
					<select name="yr" required>
					
									<?php
										for($i=1950; $i<=$curryear; $i++){
											echo"<option>$i</option>";
										}
									?>
					</select><br />
					
					<label for="price">Prezzo</label>
					<input type="number" name="price" min="100" max="9999999" required> €
					<br />
					<label for="km">Km percorsi</label>
					<input type="number" name="km" min="0" max="9999999" required> Km
					<br />
				
				<label for="cambio">Cambio</label>
				<select name="cambio" required>
					<option value="m">Manuale</option>
					<option value="a">Automatico</option>
					<option value="s">Semiautomatico</option>
				</select><br />
				
				<label for="carburante">Carburante</label>
				<select name="carb" required>
					<option value="dsl">Diesel</option>
					<option value="bnz">Benzina</option>
					<option value="ele">Elettrica</option>
					<option value="hyb">Hybrid</option>
				</select><br/>
				
				<label for="posti">Numero passeggeri</label>
				<input type="number" name="posti" min="1" max="10" required>
				<br />
				<label for="porte">Numero porte</label>
				<input type="number" name="porte" min="1" max="5" required>
				<br />
	
				<br /><INPUT type=submit value="Invia">
			</FORM>
		</div>
		
		<footer>
			<div style="margin-left: 20px; "><a href="home.php">homepage</a></div>
			<div style="margin-left: 20px; "><a href="login.php">login</a></div>
			<div style="margin-left: 20px; "><a href="registra.php">registrazione</a></div>
		</footer>
	</body>
</html>