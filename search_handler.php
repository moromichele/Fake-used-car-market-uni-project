<?php
	session_start();
	$marca = $_POST["marca"];
	$model = $_POST["model"];
	$fromyr = $_POST["fromyr"];
	$toyr = $_POST["toyr"];
	$minkm = $_POST["minkm"];
	$maxkm = $_POST["maxkm"];
	$cambio = $_POST["cambio"];
	$minprice = $_POST["minprice"];
	$maxprice = $_POST["maxprice"];
	$carb = $_POST["carb"];
	
	if($model != "any") $modquery = "AND model = '$model'"; else $modquery = "";
	if($cambio != "any") $cambquery = "AND cambio = '$cambio'"; else $cambquery ="";
	if($carb != "any") $carbquery = "AND carb = '$carb'"; else $carbquery ="";
	
	echo "SELECT * FROM annunci<br />
			WHERE marca = '$marca'<br />"
			.$modquery. "<br />
			AND anno >= '$fromyr' <br />
			AND anno <= '$toyr' <br />
			AND prezzo >= '$minkm'<br />
			AND prezzo <= '$maxkm'<br />"
			.$cambquery. "<br />"
			.$carbquery. "<br />
			ORDER BY prezzo ASC<br />";
	echo "<a href=\"home.php\">torna alla home</a>";

	/* CODICE CON MYSQL 
	if($model != "any") $modquery = "AND model = '$model'"; else $modquery = "";
	if($cambio != "any") $cambquery = "AND cambio = '$cambio'"; else $cambquery ="";
	if($carb != "any") $carbquery = "AND carb = '$carb'"; else $carbquery ="";
	
	$query = "SELECT * FROM annunci 
				WHERE marca = '$marca' "
				.$modquery.
				"AND anno >= '$fromyr'
				AND anno <= '$toyr'
				AND prezzo >= '$minkm'
				AND prezzo <= '$maxkm' "
				. $cambquery. " " .$carbquery.
				" ORDER BY prezzo ASC";
				
	
	$result = mysqli_query($conn,$query);
	
	if(!$result) {
                    echo "Database error: ".mysqli_error($conn)."<br />";
					} else {
						while ($row = mysqli_fetch_row($result)) {
			echo "<table style=\"border: 2px solid gray; border-collapse: collapse\">\n";
			echo "\t<tr>\n";
			// table columns
				foreach ($row as $col_value)
					echo "\t\t<td style=\"border: 1px solid black;\" >$col_value</td>\n";
					echo "\t</tr>\n";
				}
				
				echo "</table>\n";
               }
                // close DB connection
                mysqli_close($conn);
*/ ?>