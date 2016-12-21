<?php
include "connect.php";
// Hier maak je connectie met de database en laat je de sessie starten
?>


<?php
if(isset($_POST["log_in"]))// als er is ingelogd kan het onderste bekeken worden
{
$gebruikers = $_POST["gebruikersnaam"];// de gegevens van het invoerveld in een variabele
$wachtwoord = $_POST["wachtwoord"];// de gegevens van het wachtwoord in een variabele
$sql="SELECT * FROM gebruikers WHERE gebruiker='$gebruikers' AND wachtwoord='$wachtwoord'AND actief=1 ";// query maken
$resultaat = mysqli_query($mysql,$sql )or die("Fout: er is een fout in de query ".mysqli_error($mysql));
// Verbinding weer sluiten
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");// verbinding verbroken
$row = mysqli_fetch_assoc($resultaat);// al het resultaat word in de variabele $row geplaats
if(mysqli_num_rows($resultaat)){
	
	$_SESSION = $row;// als het resultaat klopt wordt er meteen een session gemaakt waar alle gegevens in worden opgeslagen
	
	header("location:home.php");// naar de volgende pagina
	echo $sql;}
else{
	$_SESSION = null;// als het niet klopt wordt de sessie weer leeg gehaald
	echo " de combinatie van het gebruikersnaam en wachtwoord is fout";
}
}
?>
<html>
<head> POP  </head>
<link rel="stylesheet" type="text/css" href="popmaak2.css">

<form method="post">
gebruikersnaam:<br>
<input type="text" name="gebruikersnaam" size=" 20"/><br>
wachtwoord:<br>
<input type="text" name="wachtwoord" size=" 20"/><br></br>
<input type="submit" name="log_in" value= "verzenden"/> 

</html>
<br/><br/>
