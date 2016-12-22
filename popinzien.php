<?php
    include "connect.php";
	
	$mysql = mysqli_connect($server,$user,$pass,$db) 
	  or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
if(isset(	$_GET['gebruiker_id'] )){
	$resultaat = mysqli_query($mysql,"SELECT *
                                      FROM pop
									  WHERE pop_id = {$_GET['pop_id']} 
									 "); 
	  or die("De selectquery op de database is mislukt!");
		
	mysqli_close($mysql) 
	  or die("Het verbreken van de verbinding met de MySQL-server is mislukt!"); 
	  
$pop = mysqli_fetch_assoc($resultaat);

echo"hobbys: {$pop['hobbys']} <br/> 
     hobbys_tijdsduur: {$pop['hobbys_tijdsduur']} <br/> 
	 werk: {$pop['werk']} <br/>
     werk_tijdsduur: {$pop['werk_tijdsduur']} <br/> 
	 vrienden: {$pop['vrienden']} <br/> 
	 huiswerktijd: {$pop['huiswerktijd']} <br/>
	 vorig_schooljaar: {$pop['vorig_schooljaar']} <br/> 
	 notities: {$pop['notities']}";
}


?>
