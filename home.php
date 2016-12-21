<?php
include "conect.php";
//var_dump($_SESSION); om te checken of alle sessions gevuld zijn

?>

<html>
<head> 
<link rel="stylesheet" type="text/css" href="popmaak2.css">
<title>home</title>
 </head>

 <body>
<?php
include "navigationbar.php";
$voornaam=$_SESSION["voornaam"];
$achternaam=$_SESSION["achternaam"];
echo" welkom ".$voornaam." ".$achternaam." bij POP";

?>

</body>
</html>