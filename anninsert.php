<?php
	session_start();
	
	$marca = $_POST["marca"];
	$model = $_POST["model"];
	$yr = $_POST["yr"];
	$km = $_POST["km"];
	$price = $_POST["price"];
	$cambio = $_POST["cambio"];
	$carb = $_POST["carb"];
	$posti = $_POST["posti"];
	$porte = $_POST["porte"];
	$userid = $_SESSION['id'];
	
	echo "INSERT INTO annunci VALUES ('$userid','$marca','$model','$yr','$km','$price','$cambio','$carb','$posti','$porte')";
	echo "<br />con annunci(idutente, marca, modello, anno, kilometri, prezzo, cambio, carburante, posti, porte)";
	echo "<br /><a href=\"home.php\">torna alla home</a>";
	
	/*sql code
	
	$query = "INSERT INTO annunci VALUES ('$marca','$model','$yr','$km','$price','$cambio','$carb','$posti','$porte')";
	
	$result = mysqli_query($conn,$query);
	
	if(!$result) {
                    echo "Database error: ".mysqli_error($conn)."<br />";
                } else {
                    echo "Annuncio inserito correttamente <br />";
					echo "<a href=\"home.php\">torna alla home</a>";
                }
                // close DB connection
                mysqli_close($conn);
				*/
?>