<?php
include "connect.php";
//var_dump($_SESSION); om te checken of alle sessions gevuld zijn

?>

<html>
<head> 
<title>home</title>
<img id="imgpop" src="pop.jpg" alt="POP" style="width:150px;height:120px;"> <br/>
<link rel="stylesheet" type="text/css" href="popmaak2.css">
 </head>

 <body>
<table id="t8">
<?php
$voornaam=$_SESSION["voornaam"];
$achternaam=$_SESSION["achternaam"];
echo"<div id='welkom'> Fijn dat je bent ingelogd! Welkom bij POP, ".$voornaam." ".$achternaam.".</div>";
include "navigationbar.php";

?>

</body>
</html>
