<?php
    include "connect.php";
	//var_dump($_SESSION);
	$mysql = mysqli_connect($server,$user,$pass,$db) 
	  or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
	
	$resultaat = mysqli_query($mysql,"SELECT * FROM gebruikers WHERE mentor={$_SESSION['gebruiker_id']} ORDER BY achternaam") 
	  or die("De selectquery op de database is mislukt!");
		
	mysqli_close($mysql) 
	  or die("Het verbreken van de verbinding met de MySQL-server is mislukt!"); 
	  
	while(list($gebruiker_id,$voornaam,$tussenvoegsel,$achternaam) = mysqli_fetch_row($resultaat))   
{     
 echo"<a href='popoverzicht.php?gebruiker_id=$gebruiker_id'>$voornaam,$tussenvoegsel,$achternaam </a><br />";   
} 
	
?>
