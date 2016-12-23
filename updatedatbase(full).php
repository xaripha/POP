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
$schooljaar = mysqli_real_escape_string ($mysql,$_POST["schooljaar1"]);	
$schooljaar2 = mysqli_real_escape_string ($mysql,$_POST["schooljaar2"]);
$klas = mysqli_real_escape_string ($mysql,$_POST ["klas"]);
$mentor = mysqli_real_escape_string ($mysql,$_POST ["mentor"]);
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

$extreem = mysqli_real_escape_string ($mysql,$_POST["extreem"]);
$geweldig = mysqli_real_escape_string ($mysql,$_POST["geweldig"]);
$prima = mysqli_real_escape_string ($mysql,$_POST["prima"]);
$goed = mysqli_real_escape_string ($mysql,$_POST ["goed"]);
$beetje = mysqli_real_escape_string ($mysql,$_POST ["beetje"]);
$klein = mysqli_real_escape_string ($mysql,$_POST ["klein"]);

$kleur = mysqli_real_escape_string ($mysql,$_POST["kleur"]);
$leerstijl = mysqli_real_escape_string ($mysql, $_POST["leerstijl"]);
$verwachting = mysqli_real_escape_string ($mysql, $_POST["verwachting"]);
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
mysqli_query($mysql,"INSERT INTO pop (naam,geboortedatum,hobbys,sport,bijbaan,vrienden,gevoel,beschrijf,goeievakken,slechtevakken,bijbaan,makkelijkvrienden,docentvragen,werkhoudingles,werkhoudingthuis,toetsen,werktempoles,plannen,spullen,vragendocent,maakwerk,leerwerk,initiatief,samenwerken,communicatieD,communicatieL,communicatieM,concentratie,concentratieT,presentatie,extreem,geweldig,prima,goed,beetje,klein,kleur,leerstijl,verwachting,denkstijl,verwachtingen,watleren,wathalen,watnodig,vak1,vak1tevreden,vak1bereiken,vak1werken,vak1helpen,vak1tijd,vak2,vak2tevreden,vak2bereiken,vak2werken,vak2helpen,vak2tijd,vak3,vak3tevreden,vak3bereiken,vak3werken,vak3helpen,vak3tijd,sociaal,sociaalbereiken,sociaalwerken,sociaalhelpen,sociaaltijd,studie,studiebereiken,studiewerken,studiehelpen,studietijd,watwiljeover10jaar) VALUES ('$naam','$geboortedatum','$hobbys','$sport','$bijbaan','$vrienden','$gevoel','$beschrijf','$goeievakken','$slechtevakken','$bijbaan','$makkelijkvrienden','$docentvragen','$werkhoudingles','$werkhoudingthuis','$toetsen','$werktempoles','$plannen','$spullen','$vragendocent','$maakwerk','$leerwerk','$initiatief','$samenwerken','$communicatieD','$communicatieL','$communicatieM','$concentratie','$concentratieT','$presentatie','$extreem','$geweldig','$prima','$goed','$beetje','$klein','$kleur','$leerstijl','$verwachting','$denkstijl','$verwachtingen','$watleren','$wathalen','$watnodig','$vak1','$vak1tevreden','$vak1bereiken','$vak1werken','$vak1helpen','$vak1tijd','$vak2','$vak2tevreden','$vak2bereiken','$vak2werken','$vak2helpen','$vak2tijd','$vak3','$vak3tevreden','$vak3bereiken','$vak3werken','$vak3helpen','$vak3tijd','$sociaal','$sociaalbereiken','$sociaalwerken','$sociaalhelpen','$sociaaltijd','$studie','$studiebereiken','$studiewerken','$studiehelpen','$studietijd','$watwiljeover10jaar')")or die("De insertquery op de database is mislukt!".mysqli_error($mysql));
//  opvragen uit de database
$resultaat = mysqli_query($mysql,"SELECT * FROM pop") or die("De query op de database is mislukt!");
// Verbinding weer sluiten
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");

}
?>

<head>
<link rel="stylesheet" type="text/css" href="popmaak2.css">
</head>
 <form method="post">
 <head>
 <style> 
 </style>
  <title> POP </title> 
 <p id="title"> Formulier POP Persoonlijk Ontwikkelingsplan </p> 
<p id="p1">  Op weg naar later: Wat kan ik? Wat wil ik? Wat moet ik?  </p>

<table id="t1">
<tr><td>Naam leerling: <input type="text" name="naam" /> </td><td>Schooljaar: <input type="number" name="schooljaar1" min="2016" size="4" /> - <input type="number" name="schooljaar2" min="2016" size="4" /></td></tr>
<tr><td>Geboortedatum:   <input type="date" name="geboortedatum"  min="1916-01-01" max="2016-11-10" ></td> <td>Klas en mentor: <input type="text" name="klas" value="klas"size="5" /> - <input type="text" name="mentor" value="mentor" size="4" /> </td></tr>
</table></head>
</br>
<body>
<p id="pt"> 1. Startsituatie
<table>
  <tr><td><li>Wat zijn je hobby's? </td><td><input type="text" size="40" name="hobbys " /> </li></td> </tr><br/>
  <tr><td><li>Op welke sporten zit je?</td> <td><input type="text" size="40" name="sport" /> <br/></li></td></tr>
  <tr><td><li>Heb je een bijbaantje?</td><td><input type="text" size="40" name="bijbaan" /> <br/></li></td></tr>
  <tr><td><li>Heb je vrienden in de klas/school?</td><td><input type="text" size="40" name="vrienden" /> <br/></li></td></tr>
  <tr><td><li>Hoe voel je je op school en in de klas?</td><td><input type="text" size="40" name="gevoel" /> <br/></li></td></tr>
 <tr><td> <li> Beschrijf in drie zinnen hoe vorig schooljaar is verlopen:</td><br><td><textarea name="beschrijf" rows="5" cols="42"></textarea></li></td></tr>
</table></p>
 
<p id="pt"> 2. Competenties </p>
<p id="p1"> Wat kun je al? Wat worden je ontwikkelpunten? </p>
<ul>
<table id="t3">
<tr><li><th>Cognitief</th></li></tr>
<tr><td>In welke vakken ben je goed?</td> <td><input type="text" name="goeievakken" /> </td></tr>
<tr><td>In welke vakken ben je minder goed?</td> <td><input type="text" name="slechtevakken" /></td></tr>
<tr><th><li>Sociaal </li></th></tr>  
<tr><td>Maak je makkelijk vrienden? </td><td><input type="radio" name="makkelijkvrienden" value="ja"> Ja <input type="radio" name="makkelijkvrienden" value="Nee">Nee </td></tr>
<tr><td>Durf je jezelf te presenteren?</td><td> <input type="radio" name="presenteren" value="Ja">Ja <input type="radio" name="presenteren" value="Nee">Nee </td></tr>
<tr><td>Durf je voor jezelf op te komen?</td><td><input type="radio" name="opkomen" value="Ja">Ja <input type="radio" name="opkomen" value="Nee">Nee </td></tr>
<tr><td>In hoeverre stel je vragen aan je docent?</td><td><input type="radio" name="docentvragen" value="Ja">Ja <input type="radio" name="docentvragen" value="Nee">Nee </td></tr>

<tr><th><li>Studie</li></th></tr>
<tr><td>Hoe is je werkhouding in de les? </td><td><input type="text" name="werkhoudingles " /></td></tr>
<tr><td>Hoe is je werkhouding tijdens het leren thuis?</td><td> <input type="text" name="werkhoudingthuis" /></td></tr>
<tr><td>Hoe bereid jij je toetsen voor? </td><td><textarea name="toetsen" rows="4" cols="50"></textarea></td></tr>
</table>
</ul>


<p id="pt"> 3. Studievaardigheden </br></p>
<p id="p1">Achter ieder kopje beoordeel je jezelf met een cijfer van 1 tot 10. </p>
<table>
<tr>
<th> Vaardigheid</th>
<th> Cijfer</th>
</tr>
<tr>
<td> Werktempo in de les </td><td><select name="werktempoles"> 
  <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>
</select> </td></tr>
<tr><td>Plannen </td> <td><select name="plannen">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>
</select></td></tr>
<tr><td>Spullen op orde</td> <td><select name="spullen">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
<tr><td>Vragen stellen aan de docent</td> <td><select name="vragendocent">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
<tr><td>Maakwerk</td> <td><select name="maakwerk">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
<tr><td>Leerwerk</td> <td><select name="leerwerk">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
<tr><td>Initiatief tonen</td> <td><select name="initiatief">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
<tr><td>Samenwerken</td> <td><select name="samenwerken">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
<tr><td>Communicatie met docent</td> <td><select name="communicatieD">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
<tr><td>Communicatie met mentor</td> <td><select name="communicatieM">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
<tr><td>Communicatie met medeleerlingen</td> <td><select name="communicatieM">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
<tr><td>Concentratie in de les</td> <td><select name="concentratie">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
<tr><td>Concentratie thuis</td> <td><select name="concentratieT">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
<tr><td>Presenteren</td> <td><select name="presentatie"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
  <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></td></tr>
</table>

<p id="pt"> 4. Inzet   </p>
<p id="p1">Ga al je vakken na en plaats ze vervolgens in de inzetmeter.</p> 
<img id="imginzet" src="inzetmeter.jpg" alt="inzetmeter" style="width:300px;height:400px;" > 
<p id="p2" ><table id="t5">
<tr><th> Inzet: </th> <th> Vakken:</th> </tr>
<tr id="extreem"><td>Extreme inzet: <br/> </td>  <td><input type="text" name="extreem" /><br/> </td></tr>
<tr id="geweldig"><td>Geweldige inzet: <br/> </td> <td><input type="text" name="geweldig" /><br/></td></tr>
<tr id="prima"><td>Prima inzet: <br/></td><td><input type="text" name="prima" /><br/></td></tr>
<tr id="goed"><td>Goede inzet:<br/></td><td><input type="text" name="goed" /><br/></td></tr>
<tr id="beetje"><td>Een beetje inzet:<br/></td><td><input type="text" name="beetje" /><br/></td></tr>
<tr id="kleinbeetje"><td>Een klein beetje inzet: <br/></td><td><input type="text" name="klein" /><br/></td></tr>
<tr id="geen"><td>Geen inzet: <br/></td><td><input type="text" name="geen" /><br/></td></tr> </p>
</table>
<p id="pt"> 5. Persoonlijke kenmerken</p>
<img id="imgpk" src="kenmerken.jpg" alt="inzetmeter" style="width:248px;height:246px;" ></br>
<p id="p2">Kies welke kleur het beste bij je past:</br><input type="radio" name="kleur" value="Blauw">Blauw
<input type="radio" name="kleur" value="Rood">Rood
<input type="radio" name="kleur" value="Groen">Groen<input type="radio" name="kleur" value="Geel">Geel</br>
Licht je keuze toe: </br>
<textarea name="message" rows="4" cols="50"></textarea> </br> </p>
<p id="pt"> 6. Leerstijlen </p>
<p id="p1">Welke leerstijl heb jij?</p>
<p id="p2">In totaal zijn er vier leerstijlen, dat wil zeggen 4 manieren waarop je dingen kunt leren.</br> 
Afhankelijk van de leerstof en de situatie gebruik je een bepaalde leerstijl. </br>

Klik op de button voor de site met de test <a href="https://www.123test.nl/leerstijl/ " target="_blank">Button</a>  </p>

<p id="p2">Wat is het resultaat? </br>
Het resultaat is <input type="text" name="leerstijl" size="60" />
</br> In hoeverre had je dit verwacht?</br>
<textarea name="verwachting" rows="4" cols="60"></textarea> </p>

</br>
<p id="pt"> 7.  Denkvoorkeuren  </p>
<p id="p1">Als je weet wat voor jou je denkvoorkeur is, dan kun je dit gebruiken bij jouw manier van leren. </br>
Lees de drie denkvoorkeuren door en tik de boxjes aan die volgens jou het meest bij jou passen.</p>
 
<p id="p2">
<table id="t6"> <caption> <li>Analytisch Denken</li></caption>
<tr><th>Communicatie</th><th>Proces (tijdens het werk)</th><th>Product</th></tr>
<tr><td><input type="checkbox" value="kritisch">is kritisch</td><td><input type="checkbox" value="overzicht">houdt overzicht: eerst dit, dan dat nog </td> <td><input type="checkbox" value="formulerenh">goed geformuleerd</td></tr>
<tr><td><input type="checkbox" value="redeneert">redeneert goed</td><td><input type="checkbox" value="verdieping">zoekt graag verdieping: meer informatie (boeken, internet)</td> <td><input type="checkbox" value="samenhang">logische samenhang</td></tr>
<tr><td><input type="checkbox" value="analyseert">analyseert snel</td><td><input type="checkbox" value="alleen">werkt ook graag alleen aan een (deel)opdracht </td> <td><input type="checkbox" value="kennis"> toont kennis van en inzicht in het onderwerp</td></tr>
<tr><td><input type="checkbox" value="bedoeling">weet (of vraagt) wat precies de bedoeling is van een opdracht</td><td><input type="checkbox" value="uitleggen">kan goed uitleggen waar het om gaat </td> <td></td></tr>
<tr><td><input type="checkbox" value="samenvatten">kan goed samenvatten waar het om gaat </td><td><input type="checkbox" value="evalueert">evalueert eigen en andermans werk </td> <td></td></tr>
</table>
</br>
<table id="t6">  <caption><li> Pragmatisch Denken</li></caption>
<tr><th>Communicatie</th><th>Proces (tijdens het werk)</th><th>Product</th></tr>
<tr><td><input type="checkbox" value="samenwerken">kan goed samenwerken </td><td><input type="checkbox" value="doelgericht">werkt doelgericht</td> <td><input type="checkbox" value="overzicht">met inzet en overzicht gewerkt, op tijd af</td></tr>
<tr><td><input type="checkbox" value="geleerde">kan geleerde kennis toepassen </td><td><input type="checkbox" value="setting">voelt goed aan waar het om gaat in een opdracht in een specifieke setting</td> <td><input type="checkbox" value="toegepast">beschikbare kennis goed toegepast</td></tr>
<tr><td><input type="checkbox" value="organiseert">organiseert goed: regelt (of vraagt) wie doet wat</td><td><input type="checkbox" value="motiveert">motiveert / overtuigt andere kinderen </td> <td> <input type="checkbox" value="doelgericht">toont inzicht in doelgerichte toepassing van het onderwerp</td></tr>
<tr><td><input type="checkbox" value="motivatie">toont grote motivatie</td><td><input type="checkbox" value="gebruik">maakt goed gebruik van wat voorhanden is om mee te werken </td> <td></td></tr>
<tr><td><input type="checkbox" value="kan">laat graag zien wat hij/zij weet of kan </td><td><input type="checkbox" value="betrouwbaar">werkt betrouwbaar en zelfstandig </td> <td></td></tr>
</table>
</br>
<table id="t6"> <caption> <li>Creatief Denken</li></caption>
<tr><th>Communicatie</th><th>Proces (tijdens het werk)</th><th>Product</th></tr>
<tr><td><input type="checkbox" value="ideeën">komt met nieuwe idee&#235;n</td><td><input type="checkbox" value="verbeelding">gebruikt verbeelding</td> <td><input type="checkbox" value="beeldend">beeldend geformuleerd en/of rijk ge&iuml;llustreerd</td></tr>
<tr><td><input type="checkbox" value="beelden">denkt in beelden (geeft goede vergelijkingen)</td><td><input type="checkbox" value="geheel">voegt heel verschillende soorten informatie samen tot geheel</td> <td><input type="checkbox" value="onverwachte">onverwachte verbanden tussen elementen/materialen</td></tr>
<tr><td><input type="checkbox" value="legt">legt verbanden tussen heel verschillende onderwerpen</td><td><input type="checkbox" value="ongewoon">komt tot ongewone uitkomsten, oplossingen of inzichten </td> <td> <input type="checkbox" value="eigenzinnig">toont nieuwe / eigenzinnige kijk op het onderwerp</td></tr>
<tr><td><input type="checkbox" value="meedenken">kan goed meedenken met anderen/leeft zich in</td><td><input type="checkbox" value="kijk">heeft een ongewone kijk op problemen </td> <td></td></tr>
<tr><td><input type="checkbox" value="details">let op details (inhoud) die anderen niet opvallen </td><td><input type="checkbox" value="implusief">werkt impulsief / lijkt chaotisch </td> <td></td></tr>
</table></p>
<p id="p2">Tel nu de vinkjes per tabel. De tabel waar je de meeste vinkjes hebt gezet is jouw denkvoorkeur.</br> Wat is jouw denkvoorkeur?</br>
<input type="radio" name="denkstijl" value="analytisch" checked> Analytisch denken<br>
<input type="radio" name="denkstijl" value="pragmatisch"> Pragmatisch denken<br>
<input type="radio" name="denkstijl" value="creatief"> Creatief denken </br>
Licht je keuze toe: <textarea name="message" rows="4" cols="50"></textarea> </p>
</br>
<p id="pt"> 8. Leerjaar gebonden: </p>

<p id="p1"> Wat verwacht je van dit schooljaar? </br>(Bijvoorbeeld 3e klas profielkeuze, 4e/5e klas vervolgopleiding, toekomst)
</br> </br> <textarea name="verwachtingen" rows="4" cols="50"></textarea>
 </p> </br>

<p id="pt"> 9. Doelen op korte termijn </p>
<p id="p1"> Wat wil ik leren om mijn doel te bereiken en wat en wie heb ik nodig? </p>
<p id="p2"> a) Cognitieve vaardigheden </p>
<p id="p3"> Noteer wat je cijfers nu zijn en vervolgens wat je graag zou willen behalen. </br>
Hoe ga je dit voor elkaar krijgen en wat heb je daarvoor nodig? </p>
<table id="t7">
<tr><th>Vak</th><th>Nederlands</th><th>Engels</th><th><select><option value="-Kies je vak-">-Kies je vak-</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th> <th> <select><option value="-Kies je vak-">-Kies je vak-</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th><th> <select><option value="-Kies je vak-">-Kies je vak-</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th><th> <select><option value="-Kies je vak-">-Kies je vak-</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th><th> <select><option value="-Kies je vak-">-Kies je vak-</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th><th> <select><option value="-Kies je vak-">-Kies je vak-</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th><th> <select><option value="-Kies je vak-">-Kies je vak-</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th><th> <select><option value="-Kies je vak-">-Kies je vak-</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th></tr>
<tr><td>Cijfer (Momenteel)</td> <td><input type="text" name="cijfernu" size="3" /></td><td><input type="text" name="cijfernu" size="3" /></td><td><input type="text" name="cijfernu" size="3" /></td><td><input type="text" name="cijfernu" size="3" /></td><td><input type="text" name="cijfernu" size="3" /></td><td><input type="text" name="cijfernu" size="3" /></td><td><input type="text" name="cijfernu" size="3" /></td><td><input type="text" name="cijfernu" size="3" /></td><td><input type="text" name="cijfernu" size="3" /></td><td><input type="text" name="cijfernu" size="3" /></td></tr>
<tr><td>Cijfer (Doel)</td> <td><input type="text" name="cijferdoel" size="3" /></td><td><input type="text" name="cijferdoel" size="3" /></td><td><input type="text" name="cijferdoel" size="3" /></td><td><input type="text" name="cijferdoel" size="3" /></td><td><input type="text" name="cijferdoel" size="3" /></td><td><input type="text" name="cijferdoel" size="3" /></td><td><input type="text" name="cijferdoel" size="3" /></td><td><input type="text" name="cijferdoel" size="3" /></td><td><input type="text" name="cijferdoel" size="3" /></td><td><input type="text" name="cijferdoel" size="3" /></td></tr></table>  

<p id="p2">Beschrijf hieronder de drie vakken die momenteel voor jouw cijferlijst de prioriteit hebben. </p>
<table>
<tr><th><li>Vak 1:</li></th><th><select><option value="-Kies je vak-" name="vak1" >-Kies je vak-</option><option value="Nederlands">Nederlands</option><option value="Engels">Engels</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th></tr>
<tr><td>Hoe tevreden ben je?</td><td>ontevreden<input type="range" name="vak1tevreden" min="0" max="20">tevreden</td></tr>
<tr><td>Wat wil ik bereiken?</td><td><input type="text" name="vak1bereiken" size="50" /></td></tr>
<tr><td>Hoe: hoe ga ik eraan werken?</td><td><input type="text" name="vak1werken" size="50" /></td></tr>
<tr><td>Wie gaat mij hierbij helpen?</td><td><input type="text" name="vak1helpen" size="50" /></td></tr>
<tr><td>In welk tijdspad ga ik dit voor elkaar krijgen?</td><td><input type="text" name="vak1tijd" size="50" /></td></tr>
</table> 
</br>
<table>
<tr><th><li>Vak 2:</li></th><th><select><option value="-Kies je vak-" name="vak2" >-Kies je vak-</option><option value="Nederlands">Nederlands</option><option value="Engels">Engels</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th></tr>
<tr><td>Hoe tevreden ben je?</td><td>ontevreden<input type="range" name="vak2tevreden" min="0" max="20">tevreden</td></tr>
<tr><td>Wat wil ik bereiken?</td><td><input type="text" name="vak2bereiken" size="50" /></td></tr>
<tr><td>Hoe: hoe ga ik eraan werken?</td><td><input type="text" name="vak2werken" size="50" /></td></tr>
<tr><td>Wie gaat mij hierbij helpen?</td><td><input type="text" name="vak2helpen" size="50" /></td></tr>
<tr><td>In welk tijdspad ga ik dit voor elkaar krijgen?</td><td><input type="text" name="vak2tijd" size="50" /></td></tr>
</table> 
</br>
<table>
<tr><th><li>Vak 3:</li></th><th><select><option value="-Kies je vak-" name="vak3">-Kies je vak-</option><option value="Nederlands">Nederlands</option><option value="Engels">Engels</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th></tr>
<tr><td>Hoe tevreden ben je?</td><td>ontevreden<input type="range" name="vak3tevreden" min="0" max="20">tevreden</td></tr>
<tr><td>Wat wil ik bereiken?</td><td><input type="text" name="vak3bereiken" size="50" /></td></tr>
<tr><td>Hoe: hoe ga ik eraan werken?</td><td><input type="text" name="vak3werken" size="50" /></td></tr>
<tr><td>Wie gaat mij hierbij helpen?</td><td><input type="text" name="vak3helpen" size="50" /></td></tr>
<tr><td>In welk tijdspad ga ik dit voor elkaar krijgen?</td><td><input type="text" name="vak3tijd" size="50" /></td></tr>
</table> 
</br>

<p id="p3"> b) Sociale vaardigheden </p3> <p id="p2">Kies een sociale vaardigheid die je zou willen verbeteren </p>
<table>
<tr><th><li>Sociale vaardigheid:</li></th><th><input type="text" name="sociaal" size="20" /></th></tr>
<tr><td>Wat wil ik bereiken?</td><td><input type="text" name="sociaalbereiken" size="50" /></td></tr>
<tr><td>Hoe ga ik eraan werken?</td><td><input type="text" name="sociaalwerken" size="50" /></td></tr>
<tr><td>Wie gaat mij hierbij helpen?</td><td><input type="text" name="sociaalhelpen" size="50" /></td></tr>
<tr><td>In welk tijdspad ga ik dit voor elkaar krijgen?</td><td><input type="text" name="sociaaltijd" size="50" /></td></tr>
</table>
<p id="p3"> c) Studievaardigheden </p>
<table>
<tr><th><li>Studievaardigheid:</li></th><th><input type="text" name="studie" size="20" /></th></tr>
<tr><td>Wat wil ik bereiken?</td><td><input type="text" name="studiebereiken" size="50" /></td></tr>
<tr><td>Hoe ga ik eraan werken?</td><td><input type="text" name="studiewerken" size="50" /></td></tr>
<tr><td>Wie gaat mij hierbij helpen?</td><td><input type="text" name="studiehelpen" size="50" /></td></tr>
<tr><td>In welk tijdspad ga ik dit voor elkaar krijgen?</td><td><input type="text" name="studietijd" size="50" /></td></tr>
</table>
</br></br>
 <p id="pt"> 10. Doel op lange termijn  </p>
 <p id="p1"> Wat wil je over tien jaar bereikt hebben?
 </br><textarea name="watwiljeover10jaar" rows="8" cols="80"></textarea></p>
 
  
<p> </p>
</br>
</body>
<p>
 <input type="submit" value="Verzend" />
 </p>

 
 </form>
 
 <?php
 ?>
 