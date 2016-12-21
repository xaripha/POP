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

// Hier wordt het wachtwoord gewijzigd in de database
mysqli_query($mysql,"UPDATE gebruikers SET wachtwoord = '$wachtwoord' WHERE gebruiker_id = '$gebruikers'") or die("De updatequery op de database is mislukt!");

}

// mensne opvragen uit de database
$resultaat = mysqli_query($mysql,"SELECT * FROM gebruikers where gebruiker_id= {$_SESSION["gebruiker_id"]}") or die("De query op de database is mislukt!");
// Verbinding weer sluiten
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
?>

<html>
<head>
<title>wachtwoord wijzigen</title>
</head>
<body>
<form action="ww.php" method="post">
Kies een gebruiker: <select name="gebruikers">
<?php
// Hier worden alle artikelen uit de database getoond in de keuzelijst in dit geval alleen je zelf 
while(list($gebruiker_id,$voornaam,$tussenvoegsel,$achternaam,$geboortedatum,$gebruiker,$wachtwoord,$isAdmin,$actief,$mentor) = mysqli_fetch_row($resultaat))
{
echo"<option value='$gebruiker_id'>$voornaam $tussenvoegsel $achternaam $geboortedatum $gebruiker $wachtwoord $isMentor $isLeerling $isAdmin $actief $mentor </option>";
}
?> 
</select><br /><br />
Vul het nieuwe wachtwoord details in: <br /><br />

wat is het nieuwe wachtwoord <input type="text" name="wachtwoord"/><br / ><br />
<input type="submit" name="verzend" value="Verzend" />
</form>
</body>
</html>
