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
$mentor = mysqli_real_escape_string($mysql,$_POST["voornaamM"]);
 


// Hier wordt de prijs gewijzigd in de database
mysqli_query($mysql,"UPDATE gebruikers SET mentor = '$mentor' WHERE gebruiker_id = '$gebruikers'") or die("De updatequery op de database is mislukt!");	
}

// Artikelen opvragen uit de database
$resultaat = mysqli_query($mysql,"SELECT * FROM gebruikers where isLeerling=1") or die("De query op de database is mislukt!");
$resultaat1 = mysqli_query($mysql,"SELECT gebruiker_id, voornaam FROM gebruikers where isMentor=1") or die(mysqli_error($mysql));
// Verbinding weer sluiten
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
?>

<html>
<head>
<title>leerling toe-eigenen</title>
</head>
<body>
<form action="leerlingtoeeigenen.php" method="post">
Kies een gebruiker: <select name="gebruikers">
<?php
// Hier worden alle mensen uit de database getoond in de keuzelijst
while(list($gebruiker_id,$voornaam,$tussenvoegsel,$achternaam,$geboortedatum,$gebruiker,$wachtwoord,$isMentor,$isLeerling,$isAdmin,$actief,$mentor) = mysqli_fetch_row($resultaat))
{
echo"<option value='$gebruiker_id'>$voornaam $tussenvoegsel $achternaam $geboortedatum $gebruiker $wachtwoord $isMentor $isLeerling $isAdmin $actief $mentor </option>";
}
?> 
</select><br /><br />
vul de mentor in: <select name="voornaamM">  
<?php
// Hier worden alle verschillende categoriën uit de database getoond in de keuzelijst
while(list($gebruiker_id,$voornaamM) = mysqli_fetch_row($resultaat1))
{
echo"<option value='$gebruiker_id'>$voornaamM</option>";
}
?> </select>
<input type="submit" name="verzend" value="Voeg persoon toe" />
</form>
</body>
</html>
<?php
// Hier wordt gecontroleerd of er op de zoek-knop is geklikt
if(isset($_POST["verzend"]))
{
// Hier wordt connectie gemaakt met de database
$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");

// Hier worden de ingevulde gegevens veilig opgehaald uit het formulier
$voornaamM = mysqli_real_escape_string($mysql,$_POST["voornaamM"]);

// Gegevens opvragen uit de database
$resultaat2 = mysqli_query($mysql,"SELECT * FROM gebruikers WHERE voornaam = '$voornaamM'") or die("De selectquery op de database is mislukt!");
// Verbinding weer sluiten
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");

// Hier worden de opgehaalde artikelen getoond
 while(list($gebruiker_id,$voornaam,$tussenvoegsel,$achternaam,$geboortedatum,$gebruiker,$wachtwoord,$isLeerling,$isMentor,$isAdmin,$actief,$mentor) = mysqli_fetch_row($resultaat2))
	 {
	  	echo"$voornaamM <br />";
	 }
}
?>