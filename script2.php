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
$wachtwoord = mysqli_real_escape_string($mysql,$_POST["wachtwoord"]);
 


// Hier wordt de prijs gewijzigd in de database
mysqli_query($mysql,"UPDATE gebruikers SET wachtwoord = '$wachtwoord' WHERE gebruiker_id = '$gebruikers'") or die("De updatequery op de database is mislukt!");	
}

// Artikelen opvragen uit de database
$resultaat = mysqli_query($mysql,"SELECT * FROM gebruikers where isMentor=1") or die("De query op de database is mislukt!");

// Verbinding weer sluiten
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
?>

<html>
<head>
<title>wachtwoord aanpassen mentor</title>
</head>
<body>
<form action="script2.php" method="post">
Kies een gebruiker: <select name="gebruikers">
<?php
// Hier worden alle mensen uit de database getoond in de keuzelijst
while(list($gebruiker_id,$voornaam,$tussenvoegsel,$achternaam,$geboortedatum,$gebruiker,$wachtwoord,$isMentor,$isLeerling,$isAdmin,$actief,$mentor) = mysqli_fetch_row($resultaat))
{
echo"<option value='$gebruiker_id'>$voornaam $tussenvoegsel $achternaam $geboortedatum $gebruiker $wachtwoord $isMentor $isLeerling $isAdmin $actief $mentor </option>";
}
?> 
</select><br /><br />
Vul het nieuwe wachtwoord in: <input type="text" name="wachtwoord" /><br /><br />
<input type="submit" name="verzend" value="Verzend" />
</form>
</body>
</html>