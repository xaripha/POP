<?php
include "conect.php";
// Start the session
session_start();
?>


<?php
if(isset($_POST["log_in"]))
{
// Hier wordt connectie gemaakt met de database


$gebruikers = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];
$sql="SELECT gebruiker,voornaam,achternaam,isAdmin,isLeerling,isMentor FROM gebruikers WHERE gebruiker='$gebruikers' AND wachtwoord='$wachtwoord'";
$resultaat = mysqli_query($mysql,$sql )or die("Fout: er is een fout in de query ".mysqli_error($mysql));
// Verbinding weer sluiten
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");

list($gebruiker,$voornaam,$achternaam) = mysqli_fetch_row($resultaat);

if(mysqli_num_rows($resultaat)){
	if("isAdmin=1"){
	header("location:homeA.php");
	echo $sql;}
	elseif("isLeerling= 1"){
	header("location:homeL.php");
echo $sql;}
 elseif("isMentor=1"){
	header("location:homeM.php");
echo $sql;}
}
else{

	echo " incorrect wachtwoord of gebruikersnaam ";
}
}

?>
<html>
<head> POP  </head>

<form method="post">
gebruikersnaam:<br>
<input type="text" name="gebruikersnaam" size=" 20"/><br>
wachtwoord:<br>
<input type="text" name="wachtwoord" size=" 20"/><br></br>
<input type="submit" name="log_in" value= "verzenden"/> 

</html>
<?php

?>
