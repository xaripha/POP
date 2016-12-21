<?php
    include "connect.php";
	
	$mysql = mysqli_connect($server,$user,$pass,$db) 
	  or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
if(isset(	$_GET['gebruiker_id'] )){
	$resultaat = mysqli_query($mysql,"SELECT voornaam, tussenvoegsel, achternaam, g.gebruiker_id, datum
                                      FROM gebruikers g, invoer i 
									  WHERE i.gebruiker_id = {$_GET['gebruiker_id']} 
									  ORDER BY achternaam") 
	  or die("De selectquery op de database is mislukt!");
		
	mysqli_close($mysql) 
	  or die("Het verbreken van de verbinding met de MySQL-server is mislukt!"); 
	  
	while($pop = mysqli_fetch_assoc($resultaat))   
{     
 echo"<a href='popoverzicht.php?gebruiker_id={$pop['gebruiker_id']}'>{$pop['datum']} {$pop['voornaam']} {$pop['tussenvoegsel']} {$pop['achternaam']}<a/><br />";   
} 
}


?>
