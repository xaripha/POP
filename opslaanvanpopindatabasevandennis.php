<?php
include "connect.php"; 
if(!$_SESSION['gebruiker_id']){
 header("location: inlog.php"); 
}

?>
<html>
<head>
<title>POP invullen</title>
<link rel="STYLESHEET" href="opmaak.css" type="text/css">
</head>
<body>
<form action="pop.php" method="post" >
<img src="janvegmond.png" alt="janvegmond" width="100%" height="17%">
<div class= "dude3">
<table>
 <tr>
  <td  class="kopjes"> <a href='home.php' ><b> Home</b> </a></td>  
     <td  class="kopjes"> <a href='wachtwoordwijzig.php' ><b> Wachtwoord wijzigen</b> </a></td>  
  <td  class="kopjes"> <a href='popverwijderen.php' ><b> POP verwijderen</b> </a></td>  
  <td  class="kopjes"> <a href='inloggen1.php' ><b> Uitloggen</b> </a></td>
 </tr>
</table>

<br><br><br>
<div class="dude2">
<table class="comp">
<caption class="titel">Startsituatie</caption>
<?php
 if(isset($_POST['verzenden'])) {
$hobby1 = mysqli_escape_string($mysql, $_POST['hobby1']);  
$hobby2 = mysqli_escape_string($mysql, $_POST['hobby2']);
$hobby3 = mysqli_escape_string($mysql, $_POST['hobby3']);
$sport = mysqli_escape_string($mysql, $_POST['sport']);
$bijbaan = mysqli_escape_string($mysql, $_POST['bijbaan']);
$vrienden = mysqli_escape_string($mysql, $_POST['vrienden']);
$gevoel = mysqli_escape_string($mysql, $_POST['gevoel']);
$beoordeling = mysqli_escape_string($mysql, $_POST['beoordeling']);
$g_vak1 = mysqli_escape_string($mysql, $_POST['g_vak1']);
$g_vak2 = mysqli_escape_string($mysql, $_POST['g_vak2']);
$g_vak3 = mysqli_escape_string($mysql, $_POST['g_vak3']);
$s_vak1 = mysqli_escape_string($mysql, $_POST['s_vak1']);
$s_vak2 = mysqli_escape_string($mysql, $_POST['s_vak2']);
$s_vak3 = mysqli_escape_string($mysql, $_POST['s_vak3']);
$vrienden_mm = mysqli_escape_string($mysql, $_POST['vrienden_mm']);
$presenteren_c = mysqli_escape_string($mysql, $_POST['presenteren_c']);
$opkomen = mysqli_escape_string($mysql, $_POST['opkomen']);
$vragens = mysqli_escape_string($mysql, $_POST['vragens']);
$werkhouding_s = mysqli_escape_string($mysql, $_POST['werkhouding_s']);
$werkhouding_t = mysqli_escape_string($mysql, $_POST['werkhouding_t']);
$voorbereiding_t = mysqli_escape_string($mysql, $_POST['voorbereiding_t']);
$werktempo_l = mysqli_escape_string($mysql, $_POST['werktempo_l']);
$plannen = mysqli_escape_string($mysql, $_POST['plannen']);
$spullen_oo = mysqli_escape_string($mysql, $_POST['spullen_oo']);
$vragen_d = mysqli_escape_string($mysql, $_POST['vragen_d']);
$maakwerk = mysqli_escape_string($mysql, $_POST['maakwerk']);
$leerwerk = mysqli_escape_string($mysql, $_POST['leerwerk']);
$initiatief_t = mysqli_escape_string($mysql, $_POST['initiatief_t']);
$samenwerken = mysqli_escape_string($mysql, $_POST['samenwerken']);
$communicatie_d = mysqli_escape_string($mysql, $_POST['communicatie_d']);
$communicatie_m = mysqli_escape_string($mysql, $_POST['communicatie_m']);
$communicatie_l = mysqli_escape_string($mysql, $_POST['communicatie_l']);
$concentratie_l = mysqli_escape_string($mysql, $_POST['concentratie_l']);
$concentratie_t = mysqli_escape_string($mysql, $_POST['concentratie_t']);
$presenteren = mysqli_escape_string($mysql, $_POST['presenteren']);
$extreme_i = mysqli_escape_string($mysql, $_POST['extreme_i']);
$geweldige_i = mysqli_escape_string($mysql, $_POST['geweldige_i']);
$prima_i = mysqli_escape_string($mysql, $_POST['prima_i']);
$goede_i = mysqli_escape_string($mysql, $_POST['goede_i']);
$beetje_i = mysqli_escape_string($mysql, $_POST['beetje_i']);
$weinig_i = mysqli_escape_string($mysql, $_POST['weinig_i']);
$leerstijl = mysqli_escape_string($mysql, $_POST['leerstijl']);
$verstuur_query="insert into pop (hobby1,hobby2,hobby3,sport,bijbaan,vrienden,gevoel,beoordeling_afgelopen_jaar,goede_vak1,goede_vak2,goede_vak3 
,slechte_vak1,slechte_vak2,slechte_vak3,makkelijk_vrienden_maken,durft_te_presenteren,durft_voor_zichzelf_opkomen,
vragen_stellend,werkhouding_in_les,werkhouding_thuis,voorbereiding_toets,werktempo_les,planning_vaardigheid,spullen_op_orde,vragen_docent,maakwerk,
leerwerk,toont_initiatief,samenwerking,communicatie_docent,communicatie_mentor,communicatie_leerlingen,concentratie_les,concentratie_thuis,
presentatie_vaardigheid, extreme_inzet,geweldige_inzet,prima_inzet,goede_inzet,beetje_inzet,weinig_inzet,leerstijl)

values ('$hobby1','$hobby2', '$hobby3', '$sport', '$bijbaan', '$vrienden', '$gevoel', '$beoordeling', '$g_vak1', '$g_vak2', '$g_vak3' 
, '$s_vak1', '$s_vak2', '$s_vak3', '$vrienden_mm', '$presenteren_c', '$opkomen', '$vragens', '$werkhouding_s', '$werkhouding_t', '$voorbereiding_t'
, '$werktempo_l', '$plannen', '$spullen_oo', '$vragen_d', '$maakwerk', '$leerwerk','$initiatief_t','$samenwerken','$communicatie_d','$communicatie_m'
,'$communicatie_l','$concentratie_l','$concentratie_t','$presenteren','$extreme_i','$geweldige_i','$prima_i','$goede_i','$beetje_i','$weinig_i','$leerstijl')";
//$gebruiker_id = $SESSION['gebruiker_id'];
mysqli_query($mysql,$verstuur_query) or die("Error: Add-Query has failed".mysqli_error($mysql));
//gebruiker_id,voornaam,achternaam, $_SESSION['gebruiker_id'],$_SESSION['voornaam'],$_SESSION['achternaam'],
//"insert into" heeft betrekking op de variable in database(DUS MOET DAARMEE OVEREENKOMEN), $POST functie vult de variable in die betrekking heeft
// op values. TEVENS moet de $POST-functie overeenkomen met de name van de html-codes!!
echo 'je pop is verzonden';
}
else{ echo 'vul je pop in';
}
?>
  <tr>
   <td>Wat zijn je hobby's? (noem er 3)</td> 
    <td><input type="text" name="hobby1" size="50" placeholder="" / ><br></td>
  </tr>
  <td></td>
  <td><input type="text" name="hobby2" size="50" placeholder="" / ><br></td>
  </tr>
  <td></td>
  <td><input type="text" name="hobby3" size="50" placeholder="" / ><br></td>
  </tr>
  <tr>
    <td>Op welke sport(en) zit je?</td>
    <td><input type="text" name="sport" size="50" placeholder="" / ><br></td>
  </tr>
    <tr>
    <td>Heb je een bijbaantje?</td>
    <td><input type="text" name="bijbaan" size="50" placeholder="" / ><br></td>
  </tr>
    <tr>
    <td>Heb je veel vrienden in de klas?</td>
    <td><input type="text" name="vrienden" size="50" placeholder="" / ><br></td>
  </tr>
    <tr>
    <td>Hoe voel je je op school en in de klas?</td>
    <td><input type="text" name="gevoel" size="50" placeholder="" / ><br></td>
  </tr>
    <tr>
    <td>Beschrijf in een zin hoe vorig schooljaar voor je is verlopen</td>
    <td><input type="text" name="beoordeling" size="50" placeholder="" / ><br></td>
  </tr>
    
</table>

<hr>



<table class="comp">
 <caption class="titel">Competenties</caption>
  <tr>
    
    
  </tr>
  <th>Cognitief</th>
  <tr>
    <td>In welke vakken ben je goed? (noem er 3)</td>
    <td><input type="text" name="g_vak1" size="50" placeholder="" / ><br></td>
  </tr>
  <td></td>
  <td><input type="text" name="g_vak2" size="50" placeholder="" / ><br></td>
  </tr>
  <td></td>
  <td><input type="text" name="g_vak3" size="50" placeholder="" / ><br></td>
  </tr>
    <tr>
    <td>In welke vakken ben je minder goed? (noem er 3)</td>
    <td><input type="text" name="s_vak1" size="50" placeholder="" / ><br></td>
  </tr>
  <td></td>
  <td><input type="text" name="s_vak2" size="50" placeholder="" / ><br></td>
  </tr>
  <td></td>
  <td><input type="text" name="s_vak3" size="50" placeholder="" / ><br></td>
  </tr>
 
 <th>Sociaal</th>
  <tr>
    <td>Maak je makkelijk vrienden?</td>
    <td ><input type="radio" name="vrienden_mm" value="ja" /> Ja<br></td>
  <td><input type="radio" name="vrienden_mm" value="nee" /> Nee<br></td>
    </tr>
  <tr>
    <td>Durf je jezelf te presenteren?</td>
    <td><input type="radio" name="presenteren_c" value="Ja" /> Ja<br></td>
  <td><input type="radio" name="presenteren_c" value="Nee" /> Nee<br></td>
    </tr>
  <tr>
    <td>Durf je voor jezelf op te komen?</td>
    <td><input type="radio" name="opkomen" value="Ja" /> Ja<br></td>
  <td><input type="radio" name="opkomen" value="Nee" /> Nee<br></td>
    </tr>
  <tr>
    <td>Stel je veel vragen aan je docent?</td>
    <td><input type="radio" name="vragens" value="Ja" /> Ja<br></td>
  <td><input type="radio" name="vragens" value="Nee" /> Nee<br></td>
    </tr> 
    
 
    
  <th>Studie</th>    
    <tr>
    <td>Hoe is je werkhouding in de les?</td>
    <td><input type="text" name="werkhouding_s" size="50" placeholder="" / ><br></td>
  </tr>
    <tr>
    <td>Hoe is je werkhouding tijdens het leren thuis?</td>
    <td><input type="text" name="werkhouding_t" size="50" placeholder="" / ><br></td>
  </tr>
    <tr>
    <td>Hoe bereid jij je toetsen voor?</td>
    <td><input type="text" name="voorbereiding_t" size="50" placeholder="" / ><br></td>
  </tr>
 </table>
<br>
 

 
 
 <hr>
 
 
 <table>
   <caption class="titel">Studievaardigheden</caption>
  <tr> 
    <td>geef jezelf een cijfer van 1 tot 10</td>
  </tr>
  <tr>
   <td bgcolor="#99ccff">Werktempo in de les</td> 
    <td><input type="number" name="werktempo_l" min="1" max="10"><br></td>
  </tr>
  
  <tr>
    <td bgcolor="#ffcc99">Plannen</td>
    <td><input type="number" name="plannen" min="1" max="10"><br></td>
  </tr>
    <tr>
    <td bgcolor="#9900ff">Spullen op orde</td>
    <td><input type="number" name="spullen_oo" min="1" max="10"><br></td>
  </tr>
    <tr>
    <td bgcolor="#ffff00">Vragen stellen aan de docent</td>
    <td><input type="number" name="vragen_d" min="1" max="10"><br></td>
  </tr>
    <tr>
    <td bgcolor="#d6d6c2">Maakwerk</td>
    <td><input type="number" name="maakwerk" min="1" max="10"><br></td>
  </tr>
    <tr>
    <td bgcolor="#ff9900">Leerwerk</td>
    <td><input type="number" name="leerwerk" min="1" max="10"><br></td>
  </tr>
    <tr>
    <td bgcolor="#33cc33">Initiatief tonen</td>
    <td><input type="number" name="initiatief_t" min="1" max="10"><br></td>
  </tr>
      <tr>
    <td bgcolor="#1a75ff">Samenwerken</td>
    <td><input type="number" name="samenwerken" min="1" max="10"><br></td>
  </tr>
    <tr>
    <td bgcolor="#ff6699">Communicatie met docent</td>
    <td><input type="number" name="communicatie_d" min="1" max="10"><br></td>
  </tr>
    <tr>
    <td bgcolor="#ffe6ee">Communicatie met mentor</td>
    <td><input type="number" name="communicatie_m" min="1" max="10"><br></td>
  </tr>
      <tr>
    <td bgcolor="#c68c53">Communicatie met medeleerlingen</td>
    <td><input type="number" name="communicatie_l" min="1" max="10"><br></td>
  </tr>
    <tr>
    <td bgcolor="#ffcc00">Concentratie in de les</td>
    <td><input type="number" name="concentratie_l" min="1" max="10"><br></td>
  </tr>
    <tr>
    <td bgcolor="#33ccff">Concentratie thuis</td>
    <td><input type="number" name="concentratie_t" min="1" max="10"><br></td>
  </tr>
      <tr>
    <td bgcolor="#0000ff">Presenteren</td>
    <td><input type="number" name="presenteren" min="1" max="10"><br></td>
  </tr>
</table>


<hr>


 <table class="meter">
 <caption class="titel">Inzet</caption>
  <tr> 
   <td>Zet al je vakken in deze inzet/motivatiemeter</td>
  </tr>
  <tr>
  
   <td bgcolor="#ff0000">Extreme inzet (Ik heb hier zo hard aan gewerkt! Ik heb alles gegeven):</td> 
    <td><input type="text" name="extreme_i" size="50" placeholder="" / ></td>
  </tr>
  
  <tr>
    <td bgcolor="#ff8533">Geweldige inzet (Ik denk dat ik nog 1 ding kan doen om het nog
beter te maken):</td>
    <td><input type="text" name="geweldige_i" size="50" placeholder="" / ><br></td>
  </tr>
    <tr>
    <td bgcolor="#ffff00">Prima inzet (Ik weet dat ik nog harder had kunnen werken):</td>
    <td><input type="text" name="prima_i" size="50" placeholder="" / ><br></td>
  </tr>
    <tr>
    <td bgcolor="#66ff33">Goede inzet (Ik kan nog een heleboel dingen bedenken die het nog
beter zouden maken):</td>
    <td><input type="text" name="goede_i" size="50" placeholder="" / ><br></td>
  </tr>
    <tr>
    <td bgcolor="#00ccff">Een beetje inzet (Ik heb het wel afgemaakt maar slordig):</td>
    <td><input type="text" name="beetje_i" size="50" placeholder="" / ><br></td>
  </tr>
    <tr>
    <td bgcolor="#0066ff">Een klein beetje inzet (Ik heb het niet afgemaakt)</td>
    <td><input type="text" name="weinig_i" size="50" placeholder="" / ><br></td>
  </tr>
   
</table>
 
 
 <hr>
 
 
 
 
 <p  class="titel">Leerstijlen</p> 
 Klik op deze link om erachter te komen welke leerstijl jij hebt in de <a href="https://www.123test.nl/leerstijl/">leerstijlentest</a>
 <td>Leerstijl:<input type="text" name="leerstijl" size="50" /> <br><br></td>
 
 
 
 
 <br><br><br>
 
 
<input type="submit" name="verzenden" value="Verzenden"> <!-- let op NAME moet overeenkomen met de POST ih begin -->
</form>


</div>
</div>


</body>
</html>
