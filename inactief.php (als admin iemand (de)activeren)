<?php 
// Hier worden de verbindingsgegevens opgehaald
include "connect.php";

// Hier wordt connectie gemaakt met de database
$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");

// Hier wordt gecontroleerd of er op de verzend-knop is geklikt
if(isset($_POST["verzend"]))
{
// Hier worden de ingevulde gegevens veilig opgehaald uit het formulier
$gebruikers = mysqli_real_escape_string($mysql,$_POST["gebruikers"]);	
$gebruiker = mysqli_real_escape_string($mysql,$_POST["gebruiker"]);
$actief = mysqli_real_escape_string($mysql,$_POST["actief"]);

// Hier wordt actief gewijzigd in de database dit ozdat makkelijk op actief en inactief kan worden gezet, het rectiveren was niet noodzakelijk maar vondt het wel nuttig m erbij te doen
mysqli_query($mysql,"UPDATE gebruikers SET actief = '$actief' WHERE gebruiker_id = '$gebruikers'") or die("De updatequery op de database is mislukt!");	


}

// Artikelen opvragen uit de database
$resultaat = mysqli_query($mysql,"SELECT * FROM gebruikers ") or die("De query op de database is mislukt!");
// Verbinding weer sluiten
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="popmaak2.css">
<title>(de)activeren</title>
</head>
<body>
<form action="(de)activeren.php" method="post">
Kies een gebruiker: <select name="gebruikers">
<?php
// Hier worden alle persoen uit de database getoond in de keuzelijst
while(list($gebruiker_id,$voornaam,$tussenvoegsel,$achternaam,$geboortedatum,$gebruiker,$wachtwoord,$isAdmin,$actief,$mentor) = mysqli_fetch_row($resultaat))
{
echo"<option value='$gebruiker_id'>$voornaam $tussenvoegsel $achternaam $geboortedatum $gebruiker $wachtwoord $isMentor $isLeerling $isAdmin $actief $mentor </option>";
}
?> 
</select><br /><br />
de(activeer): <br /><br />
wat is de nieuwe status  <select name="actief">
  <option value="1">1</option>
  <option value="0">0</option>
 
</select>


<input type="submit" name="verzend" value="Verzend" />
</form>
</body>
</html>
