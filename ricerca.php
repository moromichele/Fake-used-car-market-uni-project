<?php
	include 'modelli.php';
	$curryear = date("Y");
?>

<html>	
	<head>
		<title>Usauto - ricerca</title>
		<script src="noscript.js"></script>
		<link rel="stylesheet" type="text/css" href="generalstyle.css">
	</head>
	<body onload="setHandlers()">
		<header><h2 style="margin-left:10px; margin-bottom: 100px;">RICERCA</h2></header>
		
		<div id="myforms" style="height: 75%">
			<FORM action="search_handler.php" method="post">
					<label for="sel">Marca</label>
					<select name="marca" id="sel" required>
							<option value="" selected disabled hidden>Seleziona marca</option>
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
					<label for="modelli">Modello</label>
					<select name="model" id="modelli">
						<?php
							if(!isset($_GET["mkr"])){
								echo"<option selected disabled hidden>Marca non selezionata</option>";
							}else{
								echo"<option selected value=\"any\">Seleziona modello</option>";
								for($i =0; $i<sizeof($marche[$_GET["mkr"]]); $i++){
										$modello = $marche[$_GET["mkr"]][$i];
										echo"<option>$modello</option>";
								}
							}
						?>
					</select><br />
				
					<label>Anno</label><br />
					<select name="fromyr">
									<option selected value="1950">Dal</option>
									<?php
										for($i=1950; $i<=$curryear; $i++){
											echo"<option>$i</option>";
										}
									?>
					</select>
			
					<select name="toyr">
									<option selected value=<?php echo"$curryear";?>>Al</option>
									<?php
										for($i=1950; $i<=$curryear; $i++){
											echo"<option>$i</option>";
										}
									?>
					</select><br />
					
					<label>Prezzo</label><br />
					<select name="minprice">
							<option selected value="0">Da</option>
							<?php
								for($i = 500; $i<=5000 ; $i+=500){
										echo"<option value=\"$i\">€ $i</option>";
								}	
								for($i = 6000; $i<=10000 ; $i+=1000){
										echo"<option value=\"$i\">€ $i</option>";
								}	
								for($i = 10000; $i<=100000 ; $i+=10000){
										echo"<option value=\"$i\">€ $i</option>";
								}	
								
							?>
					</select>
					
					<select name="maxprice">
							<option selected value="9999999">A</option>
							<?php
								for($i = 500; $i<=5000 ; $i+=500){
										echo"<option value=\"$i\">€ $i</option>";
								}	
								for($i = 6000; $i<=10000 ; $i+=1000){
										echo"<option value=\"$i\">€ $i</option>";
								}	
								for($i = 10000; $i<=100000 ; $i+=10000){
										echo"<option value=\"$i\">€ $i</option>";
								}	
								
							?>
					</select><br />
					
					<label>Km percorsi</label><br />
					<select name="minkm">
							<option selected value="0">Da</option>
							<option value="10000">10000 km</option>
							<option value="50000">50000 km</option>
							<option value="100000">100000 km</option>
							<option value="200000">200000 km</option>
					</select>
					
					<select name="maxkm">
							<option selected value="99999999">a</option>
							<option value="10000">10000 km</option>
							<option value="50000">50000 km</option>
							<option value="100000">100000 km</option>
							<option value="200000">200000 km</option>
					</select><br />
			Cambio:
				<select name="cambio">
					<option selected value="any">Qualsiasi</option>
					<option value="m">Manuale</option>
					<option value="a">Automatico</option>
					<option value="s">Semiautomatico</option>
				</select><br />
			Carburante:
				<select name="carb">
					<option selected value="any">Qualsiasi</option>
					<option value="dsl">Diesel</option>
					<option value="bnz">Benzina</option>
					<option value="ele">Elettrica</option>
					<option value="hyb">Hybrid</option>
				</select><br />
				
				<INPUT type="submit" value="Invia">
			</FORM>
		</div>
		
		
		<footer>
			<div style="margin-left: 20px; "><a href="home.php">homepage</a></div>
			<div style="margin-left: 20px; "><a href="login.php">login</a></div>
			<div style="margin-left: 20px; "><a href="registra.php">registrazione</a></div>
		</footer>
	</body>
</html>
