<?php 
// Hier worden de verbindingsgegevens opgehaald
include "connect.php";

// Hier wordt connectie gemaakt met de database
$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");

// Hier wordt gecontroleerd of er op de verzend-knop is geklikt
if(isset($_POST["verzend"]))
{
// Hier worden de ingevulde gegevens veilig opgehaald uit het formulier
$pop = mysqli_real_escape_string($mysql,$_POST["pop"]);	
$notities = mysqli_real_escape_string($mysql,$_POST["notities"]);

// Hier wordt de prijs gewijzigd in de database
mysqli_query($mysql,"UPDATE pop SET notities = '$notities' WHERE pop_id = '$pop'") or die("De updatequery op de database is mislukt!");	
}

// Artikelen opvragen uit de database
$resultaat = mysqli_query($mysql,"SELECT * FROM 
pop P, invoer I, gebruiker G 
where P.pop_id=I.pop_id and G.geruiker_id = I.gebruiker_id and G.mentor={$_SESSION["gebruiker_id"]}  ") or die("De query op de database is mislukt!");

// Verbinding weer sluiten
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
?>

<html>
<head>
<title>notities toevoegen</title>
</head>
<body>
<form action="notities.php" method="post">
Kies een pop: <select name="pop">
<?php
// Hier worden alle artikelen uit de database getoond in de keuzelijst
while(list($pop_id,$hobbys,$hobbys_tijdsduur,$werk,$werktijdsduur,$vrienden,$huiswerktijd,$vorigschooljaar,$notieties) = mysqli_fetch_row($resultaat))
{
echo"<option value='$pop_id'> $hobbys $hobbys_tijdsduur $werk $werktijdsduur $vrienden $huiswerktijd $vorigschooljaar $notieties  </option>";
}
?> 
</select><br /><br />
vul een notitie in in: <input type="text" name="notieties" /><br /><br />
<input type="submit" name="verzend" value="Verzend" />
</form>
</body>
</html>
