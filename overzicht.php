<?php

    include "conect.php";
	$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
	
	$resultaat = mysqli_query($mysql,"SELECT * FROM gebruikers WHERE mentor={$_SESSION['gebruikersnaam2']} ORDER BY achternaam") or die("De selectquery op de database is mislukt!");
		
	mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!"); 

	while(list($voornaam,$tussenvoegsel,$achternaam) = mysqli_fetch_row($resultaat))   
{     
 echo"$voornaam, $tussenvoegsel, $achternaam <br />";   
}
	
