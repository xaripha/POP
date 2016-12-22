<?php
    include "connect.php";
	
	$mysql = mysqli_connect($server,$user,$pass,$db) 
	  or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
if(isset(	$_GET['gebruiker_id'] )){
	$resultaat = mysqli_query($mysql,"SELECT *
                                      FROM pop p, invoer i ,gebruikers g
									  WHERE g.gebruiker_id = i.gebruiker_id AND p.pop_id=i.pop_id AND i.gebruiker_id = {$_GET['gebruiker_id']} 
									  ORDER BY datum DESC") 
	  or die("De selectquery op de database is mislukt!".mysqli_error($mysql));
		
	mysqli_close($mysql) 
	  or die("Het verbreken van de verbinding met de MySQL-server is mislukt!"); 
	  
	while($pop = mysqli_fetch_assoc($resultaat))   
{     
 echo"<a href='popoverzicht.php?pop_id={$pop['pop_id']}'>{$pop['datum']} {$pop['voornaam']}<a/><br />";   
} 
}


?>
