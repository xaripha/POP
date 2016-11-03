
<html>
<head> POP  </head>

<form method="post">
gebruikersnaam:<br>
<input type="text" name="gebruikersnaam" size=" 20"/><br>
wachtwoord:<br>
<input type="text" name="wachtwoord" size=" 20"/><br></br>
<input type="submit" name="log in" value= "verzenden"/> 

</html>
<?php
if(isset($_POST["verzend"]))
{
// Hier wordt connectie gemaakt met de database
$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");

$gebruiker = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];

$resultaat = mysqli_query($mysql,"SELECT * FROM gebruikers WHERE gebruiksnaam='$gebruiker' AND wachtwoord='$wachtwoord'" )or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");
// Verbinding weer sluiten
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");

$regel = mysqli_fetch_row($mysql,$resultaat);
if(isset($regel['gebruikersnaam'])){
	?>
	<link rel="stylesheet" type="php" href="script3.php">
	<?php

}
else{
	echo " incorrect wachtwoord of gebruikersnaam ";
}
}
?>
