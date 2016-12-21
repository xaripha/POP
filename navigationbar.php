<?php
 if(!isset($_SESSION)) 
    { 
	include"connect.php";}
?>
<html>
<body>
<ul>
<li><a href="home1.php">Home</a></li>
<?php if($_SESSION['isAdmin']==1){  ?>
<li><a href="inactief.php">inactief maken</a></li>
<li id="a3"><a href="toevoegen.php">toevoegen</a></li>
<?php ;}
elseif($_SESSION['isMentor']==1){  ?>
<li id="a4"><a href="wijzig_wachtwoord.php">wijzig wachtwoord</a></li>
<li id="a5"><a href="toevoegen.php">toevoegen</a></li>
<li id="a4"><a href="POP2.php">POP verwijderen</a></li>
<li id="a6"><a href="wijziggegevens.php">wijzig gegevens</a></li>
<li id="a7"><a href="inzien.php">pop inzien</a></li>
<li id="a8"><a href="overzichtlijstl.php">overzicht leerlingen</a></li>
<li id="a9"><a href="overzichtlijstm.php">overzicht mentorleerlingen</a></li>
<?php ;}
 elseif($_SESSION['isLeerling']==1){  ?>
<li><a href="wijzig_wachtwoord.php">wijzig wachtwoord</a></li>
<li><a href="POP1.php">POP</a></li>
<li><a href="POP2.php">POP verwijderen</a></li>
<?php ;}
 else{
 header("location:PopInlog.php");}?>
 <li id="a13"><a href="PopInlog.php"> uitloggen</a></li>
</ul>
</body>
</html>
