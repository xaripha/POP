<?php 
// Hier worden de verbindingsgegevens opgehaald
include "connect.php";

// Hier wordt connectie gemaakt met de database
$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");

// Hier wordt gecontroleerd of er op de verzend-knop is geklikt
if(isset($_POST["verzend"]))
{
	var_dump($_POST);
// Hier worden de ingevulde gegevens veilig opgehaald uit het formulier
	
$voornaam= mysqli_real_escape_string($mysql,$_POST["voornaam"]);
$tussenvoegsel = mysqli_real_escape_string($mysql,$_POST["tussenvoegsel"]);
$achternaam = mysqli_real_escape_string($mysql,$_POST["achternaam"]);
$geboortedatum= mysqli_real_escape_string($mysql,$_POST["geboortedatum"]);
$gebruiker = mysqli_real_escape_string($mysql,$_POST["gebruiker"]);
$wachtwoord= mysqli_real_escape_string($mysql,$_POST["wachtwoord"]);
if(isset($_POST["isMentor"])){
	$isMentor= 1;
}else{
	$isMentor=null;
};
if(isset($_POST["isLeerling"])){
	$isLeerling= 1;
}else{
	$isLeerling=null;
};
if(isset($_POST["isAdmin"])){
	$isAdmin= 1;
}else{
	$isAdmin=null;
};
if(isset($_POST["actief"])){
$actief= 1;	
}else{ 
$actief=null;
};
$mentor= mysqli_real_escape_string($mysql,$_POST["voornaamM"]);







// Hier wordt de persoon toegevoegd aan de database
mysqli_query($mysql,"INSERT INTO gebruikers (voornaam,tussenvoegsel,achternaam,geboortedatum,gebruiker,wachtwoord,isMentor,isLeerling,isAdmin,actief,mentor) VALUES('$voornaam','$tussenvoegsel','$achternaam','$geboortedatum','$gebruiker','$wachtwoord','$isMentor','$isLeerling','$isAdmin','$actief',$mentor)") or die("De insertquery op de database is mislukt!".mysqli_error($mysql));	
}
$resultaat = mysqli_query($mysql,"SELECT gebruiker_id, voornaam FROM gebruikers where isMentor=1") or die(mysqli_error($mysql));

// Verbinding weer sluiten
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");
?>

<html>
<head>
<title>gebruiker toevoegen</title>
</head>
<body>
<form action="persoontoevoegen.php" method="post">
Vul de voornaam in: <input type="text" name="voornaam" /><br /><br />
Vul het toegenvoegsel in: <input type="text" name="tussenvoegsel" /><br /><br />
Vul de achternaam in: <input type="text" name="achternaam" /><br /><br />
vul de geboortedatum in: <input type="text" name="geboortedatum" /><br /><br /> 
Vul de gebruiker in: <input type="text" name="gebruiker" /><br /><br />
Vul het wachtwoord in: <input type="text" name="wachtwoord" /><br /><br />
Vul of het mentor is in: <input type="checkbox"  value="1" name="isMentor" /><br /><br />
Vul of het leerling isin: <input type="checkbox" value="1" name="isLeerling" /><br /><br /> 
vul of het admin is in: <input type="checkbox"   value="1" name="isAdmin" /><br /><br /> 
Vul in of ze actief zijn: <input type="checkbox" value="1" name="actief" /><br /><br />
vul de mentor in: <select name="voornaamM">  
<?php
// Hier worden alle verschillende keuzes uit de database getoond in de keuzelijst
while(list($gebruiker_id,$voornaamM) = mysqli_fetch_row($resultaat))
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

// Hier worden de opgehaalde mensen getoond
 while(list($gebruiker_id,$voornaam,$tussenvoegsel,$achternaam,$geboortedatum,$gebruiker,$wachtwoord,$isLeerling,$isMentor,$isAdmin,$actief,$mentor) = mysqli_fetch_row($resultaat2))
	 {
	  	echo"$voornaamM <br />";
	 }
}
?>