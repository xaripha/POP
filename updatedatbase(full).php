<?php 
// Hier worden de verbindingsgegevens opgehaald
include "connect.php";

// Hier wordt connectie gemaakt met de database
$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!");

// Hier wordt gecontroleerd of er op de verzend-knop is geklikt
if(isset($_POST["verzend"]))
{
// Hier worden de ingevulde gegevens veilig opgehaald uit het formulier
$naam = mysqli_real_escape_string($mysql,$_POST["naam"]);	
$geboortedatum = mysqli_real_escape_string($mysql,$_POST["geboortedatum"]);
$hobbys = mysqli_real_escape_string($mysql,$_POST["hobbys"]);	
$sport = mysqli_real_escape_string($mysql,$_POST["sport"]);
$bijbaan = mysqli_real_escape_string($mysql,$_POST["bijbaan"]);	
$vrienden = mysqli_real_escape_string($mysql,$_POST["vrienden"]);
$gevoel = mysqli_real_escape_string($mysql,$_POST["gevoel"]);	
$beschrijf = mysqli_real_escape_string($mysql,$_POST["beschrijf"]);
$goeievakken = mysqli_real_escape_string($mysql,$_POST["goeievakken"]);	
$slechtevakken = mysqli_real_escape_string($mysql,$_POST["slechtevakken"]);
$makkelijkvrienden = mysqli_real_escape_string($mysql,$_POST["makkelijkvrienden"]);	
$presenteren = mysqli_real_escape_string($mysql,$_POST["presenteren"]);
$opkomen = mysqli_real_escape_string($mysql,$_POST["opkomen"]);	
$docentvragen = mysqli_real_escape_string($mysql,$_POST["docentvragen"]);
$werkhoudingles = mysqli_real_escape_string($mysql,$_POST["werkhoudingles"]);
$werkhoudingthuis = mysqli_real_escape_string($mysql,$_POST["werkhoudingthuis"]);	
$toetsen = mysqli_real_escape_string($mysql,$_POST["toetsen"]);

$werktempoles = mysqli_real_escape_string ($mysql,$_POST["werktempoles"]);
$plannen = mysqli_real_escape_string ($mysql,$_POST["plannen"]);
$spullen = mysqli_real_escape_string ($mysql,$_POST["spullen"]);
$vragendocent = mysqli_real_escape_string ($mysql,$_POST["vragendocent"]);
$maakwerk = mysqli_real_escape_string ($mysql,$_POST["maakwerk"]);
$leerwerk = mysqli_real_escape_string ($mysql,$_POST["leerwerk"]);
$initiatief = mysqli_real_escape_string ($mysql,$_POST["initiatief"];
$samenwerken = mysqli_real_escape_string ($mysql,$_POST["samenwerken"]);
$communicatieD = mysqli_real_escape_string ($mysql,$_POST["communicatieD"]);
$communicatieM = mysqli_real_escape_string ($mysql,$_POST["communicatieM"]);
$comuunicatieL = mysqli_real_escape_string ($mysql,$_POST["communicatieL"]);
$concentratie = mysqli_real_escape_string ($mysql,$_POST ["concentratie"]);
$concentratieT = mysqli_real_escape_string ($mysql,$_POST ["concentratieT"]);
$presentatie = mysqli_real_escape_string ($mysql,$_POST ["presentatie"]);

$kleur = mysqli_real_escape_string ($mysql,$_POST["kleur"]);
$leerstijl = mysqli_real_escape_string ($mysql, $_POST["leerstijl"]);
$denkstijl = mysqli_real_escape_string ($mysql, $_POST["denkstijl"]);
$verwachtingen = mysqli_real_escape_string ($mysql, $_POST["verwachtingen"]);

$watleren = mysqli_real_escape_string ($mysql, $_POST["watleren"]);
$wathalen = mysqli_real_escape_string ($mysql, $_POST["wathalen"]);
$watnodig = mysqli_real_escape_string ($mysql, $_POST["watnodig"]);

$vak1 = mysqli_real_escape_string ($mysql, $_POST["vak1"]);
$vak1tevreden = mysqli_real_escape_string($mysql, $_POST["vak1tevreden"]);
$vak1bereiken = mysqli_real_escape_string ($mysql, $_POST["vak1bereiken"]);
$vak1werken = mysqli_real_escape_string ($mysql, $_POST["vak1werken"]);
$vak1helpen = mysqli_real_escape_string ($mysql, $_POST["vak1helpen"]);
$vak1tijd = mysqli_real_escape_string ($mysql, $_POST["vak1tijd"]);

$vak2 = mysqli_real_escape_string ($mysql, $_POST["vak2"]);
$vak2tevreden = mysqli_real_escape_string($mysql, $_POST["vak2tevreden"]);
$vak2bereiken = mysqli_real_escape_string ($mysql, $_POST["vak2bereiken"]);
$vak2werken = mysqli_real_escape_string ($mysql, $_POST["vak2werken"]);
$vak2helpen = mysqli_real_escape_string ($mysql, $_POST["vak2helpen"]);
$vak2tijd = mysqli_real_escape_string ($mysql, $_POST["vak2tijd"]);

$vak3 = mysqli_real_escape_string ($mysql, $_POST["vak3"]);
$vak3tevreden = mysqli_real_escape_string($mysql, $_POST["vak3tevreden"]);
$vak3bereiken = mysqli_real_escape_string ($mysql, $_POST["vak3bereiken"]);
$vak3werken = mysqli_real_escape_string ($mysql, $_POST["vak3werken"]);
$vak3helpen = mysqli_real_escape_string ($mysql, $_POST["vak3helpen"]);
$vak3tijd = mysqli_real_escape_string ($mysql, $_POST["vak3tijd"]);

$sociaal = mysqli_real_escape_string ($mysql, $_POST["sociaal"]);
$sociaalbereiken = mysqli_real_escape_string ($mysql, $_POST["sociaalbereiken"]);
$sociaalwerken = mysqli_real_escape_string ($mysql, $_POST["sociaalwerken"]);
$sociaalhelpen = mysqli_real_escape_string ($mysql, $_POST["sociaalhelpen"]);
$sociaaltijd = mysqli_real_escape_string ($mysql, $_POST["sociaaltijd"]);

$studie = mysqli_real_escape_string ($mysql, $_POST["studie"]);
$studiebereiken = mysqli_real_escape_string ($mysql, $_POST["studiebereiken"]);
$studiewerken = mysqli_real_escape_string ($mysql, $_POST["studiewerken"]);
$studiehelpen = mysqli_real_escape_string ($mysql, $_POST["studiehelpen"]);
$studietijd = mysqli_real_escape_string ($mysql, $_POST["studietijd"]);

$watwiljeover10jaar = mysql_real_escape_string ($mysql, $_POST["watwiljeover10jaar"])

// Hier wordt het wachtwoord gewijzigd in de database
mysqli_query($mysql,"UPDATE pop SET naam = '$naam'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET geboortedatum = '$geboortedatum'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET hobbys = '$hobbys'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET sport = '$sport'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET bijbaan = '$bijbaan'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vrienden = '$vrienden'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET gevoel = '$gevoel'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET beschrijf = '$beschrijf'") or die("De updatequery op de database is mislukt!");

mysqli_query($mysql,"UPDATE pop SET goeievakken = '$goeievakken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET slechtevakken = '$slechtevakken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET bijbaan = '$bijbaan'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET makkelijkvrienden = '$makkelijkvrienden'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET opkomen = '$opkomen'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET docentvragen = '$docentvragen'") or die("De updatequery op de database is mislukt!");

mysqli_query($mysql,"UPDATE pop SET werkhoudingles = '$werkhoudingles'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET werkhoudingthuis = '$werkhoudingthuis'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET toetsen = '$toetsen'") or die("De updatequery op de database is mislukt!");

mysqli_query($mysql,"UPDATE pop SET werktempoles = '$werktempoles'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET plannen = '$plannen'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET spullen = '$spullen'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vragendocent = '$vragendocent'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET maakwerk = '$maakwerk'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET leerwerk = '$leerwerk'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET initiatief = '$initiatief'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET samenwerken = '$samenwerken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET communicatieD = '$communicatieD'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET communicatieL = '$communicatieL'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET communicatieM = '$communicatieM'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET concentratie = '$concentratie'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET concentratieT = '$concentratieT'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET presentatie = '$presentatie'") or die("De updatequery op de database is mislukt!");

mysqli_query($mysql,"UPDATE pop SET kleur = '$kleur'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET leerstijl = '$leerstijl'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET denkstijl = '$denkstijl'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET verwachtingen = '$verwachtingen'") or die("De updatequery op de database is mislukt!");

mysqli_query($mysql,"UPDATE pop SET watleren = '$watleren'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET wathalen = '$wathalen'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET watnodig = '$watnodig'") or die("De updatequery op de database is mislukt!");

mysqli_query($mysql,"UPDATE pop SET vak1 = '$vak1'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak1tevreden = '$vak1tevreden'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak1bereiken = '$vak1bereiken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak1werken = '$vak1werken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak1helpen = '$vak1helpen'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak1tijd = '$vak1tijd'") or die("De updatequery op de database is mislukt!");

mysqli_query($mysql,"UPDATE pop SET vak2 = '$vak2'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak2tevreden = '$vak2tevreden'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak2bereiken = '$vak2bereiken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak2werken = '$vak2werken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak2helpen = '$vak2helpen'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak2tijd = '$vak2tijd'") or die("De updatequery op de database is mislukt!");

mysqli_query($mysql,"UPDATE pop SET vak3 = '$vak3'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak3tevreden = '$vak3tevreden'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak3bereiken = '$vak3bereiken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak3werken = '$vak3werken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak3helpen = '$vak3helpen'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET vak3tijd = '$vak3tijd'") or die("De updatequery op de database is mislukt!");

mysqli_query($mysql,"UPDATE pop SET sociaal = '$sociaal'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET sociaalbereiken = '$sociaalbereiken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET sociaalwerken = '$sociaalwerken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET sociaalhelpen = '$sociaalhelpen'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET sociaaltijd = '$sociaaltijd'") or die("De updatequery op de database is mislukt!");

mysqli_query($mysql,"UPDATE pop SET studie = '$studie'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET studiebereiken = '$studiebereiken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET studiewerken = '$studiewerken'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET studiehelpen = '$studiehelpen'") or die("De updatequery op de database is mislukt!");
mysqli_query($mysql,"UPDATE pop SET studietijd = '$studietijd'") or die("De updatequery op de database is mislukt!");

mysqli_query($mysql,"UPDATE pop SET watwiljeover10jaar = '$watwiljeover10jaar'") or die("De updatequery op de database is mislukt!")

}



 <p id="pt"> 10. Doel op lange termijn  </p>
 <p id="p1"> Wat wil je over tien jaar bereikt hebben?
 </br><textarea name="message" rows="8" cols="80"></textarea></p>
 
  

 
 
 ?>
