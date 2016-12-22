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



}


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
<tr><th><li>Vak 1:</li></th><th><select><option value="-Kies je vak-">-Kies je vak-</option><option value="Nederlands">Nederlands</option><option value="Engels">Engels</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th></tr>
<tr><td>Hoe tevreden ben je?</td><td>ontevreden<input type="range" name="points" min="0" max="20">tevreden</td></tr>
<tr><td>Wat wil ik bereiken?</td><td><input type="text" name="bereiken" size="50" /></td></tr>
<tr><td>Hoe: hoe ga ik eraan werken?</td><td><input type="text" name="werken" size="50" /></td></tr>
<tr><td>Wie gaat mij hierbij helpen?</td><td><input type="text" name="helpen" size="50" /></td></tr>
<tr><td>In welk tijdspad ga ik dit voor elkaar krijgen?</td><td><input type="text" name="tijdspad" size="50" /></td></tr>
</table> 
</br>
<table>
<tr><th><li>Vak 2:</li></th><th><select><option value="-Kies je vak-">-Kies je vak-</option><option value="Nederlands">Nederlands</option><option value="Engels">Engels</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th></tr>
<tr><td>Hoe tevreden ben je?</td><td>ontevreden<input type="range" name="points" min="0" max="20">tevreden</td></tr>
<tr><td>Wat wil ik bereiken?</td><td><input type="text" name="bereiken" size="50" /></td></tr>
<tr><td>Hoe: hoe ga ik eraan werken?</td><td><input type="text" name="werken" size="50" /></td></tr>
<tr><td>Wie gaat mij hierbij helpen?</td><td><input type="text" name="helpen" size="50" /></td></tr>
<tr><td>In welk tijdspad ga ik dit voor elkaar krijgen?</td><td><input type="text" name="tijdspad" size="50" /></td></tr>
</table> 
</br>
<table>
<tr><th><li>Vak 3:</li></th><th><select><option value="-Kies je vak-">-Kies je vak-</option><option value="Nederlands">Nederlands</option><option value="Engels">Engels</option><option value="Frans">Frans</option><option value="Duits">Duits</option><option value="Latijn">Latijn</option><option value="Grieks">Grieks</option><option value="Wiskunde(A,B,C)">Wiskunde (A, B, C)</option>
  <option value="Wiskunde D">Wiskunde D</option><option value="Informatica">Informatica</option><option value="Aardrijkskunde">Aardrijkskunde</option><option value="Geschiedenis">Geschiedenis</option><option value="Biologie">Biologie</option><option value="Scheikunde">Scheikunde</option><option value="Natuurkunde">Natuurkunde</option><option value="Economie">Economie<option value="M&O">M&O </option><option value="Kunst">Kunst</option><option value="BSM">BSM</select> </th></tr>
<tr><td>Hoe tevreden ben je?</td><td>ontevreden<input type="range" name="points" min="0" max="20">tevreden</td></tr>
<tr><td>Wat wil ik bereiken?</td><td><input type="text" name="bereiken" size="50" /></td></tr>
<tr><td>Hoe: hoe ga ik eraan werken?</td><td><input type="text" name="werken" size="50" /></td></tr>
<tr><td>Wie gaat mij hierbij helpen?</td><td><input type="text" name="helpen" size="50" /></td></tr>
<tr><td>In welk tijdspad ga ik dit voor elkaar krijgen?</td><td><input type="text" name="tijdspad" size="50" /></td></tr>
</table> 
</br>

<p id="p3"> b) Sociale vaardigheden </p3> <p id="p2">Kies een sociale vaardigheid die je zou willen verbeteren </p>
<table>
<tr><th><li>Sociale vaardigheid:</li></th><th><input type="text" name="socialevaardigheid" size="20" /></th></tr>
<tr><td>Wat wil ik bereiken?</td><td><input type="text" name="bereiken" size="50" /></td></tr>
<tr><td>Hoe ga ik eraan werken?</td><td><input type="text" name="werken" size="50" /></td></tr>
<tr><td>Wie gaat mij hierbij helpen?</td><td><input type="text" name="helpen" size="50" /></td></tr>
<tr><td>In welk tijdspad ga ik dit voor elkaar krijgen?</td><td><input type="text" name="tijdspad" size="50" /></td></tr>
</table>
<p id="p3"> c) Studievaardigheden </p>
<table>
<tr><th><li>Studievaardigheid:</li></th><th><input type="text" name="studievaardigheid" size="20" /></th></tr>
<tr><td>Wat wil ik bereiken?</td><td><input type="text" name="bereiken" size="50" /></td></tr>
<tr><td>Hoe ga ik eraan werken?</td><td><input type="text" name="werken" size="50" /></td></tr>
<tr><td>Wie gaat mij hierbij helpen?</td><td><input type="text" name="helpen" size="50" /></td></tr>
<tr><td>In welk tijdspad ga ik dit voor elkaar krijgen?</td><td><input type="text" name="tijdspad" size="50" /></td></tr>
</table>
</br></br>
 <p id="pt"> 10. Doel op lange termijn  </p>
 <p id="p1"> Wat wil je over tien jaar bereikt hebben?
 </br><textarea name="message" rows="8" cols="80"></textarea></p>
 
  
<p> </p>
</br>
</body>
<p>
 <input type="submit" value="Verzend" />
 </p>

 
 </form>
 
 <?php
 ?>
