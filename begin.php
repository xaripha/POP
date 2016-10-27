<?php 

include "connect.php"; 
$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!"); 
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!"); 
?>