<?php
include"connect.php";
?>
<html>
<body>
<ul>
<li id="a1"><a href="home1.php">Home</a></li>
<?php if($_SESSION['isAdmin']==1){  ?>
<li id="a2"><a href="inactief.php">inactief maken</a></li>
<li id="a3"><a href="toevoegen.php">toevoegen</a></li>
<?php }?>
<?php elseif($_SESSION['isMentor']==1){  ?>
<li id="a4"><a href="wijzig_wachtwoord.php">wijzig wachtwoord</a></li>
<li id="a5"><a href="toevoegen.php">toevoegen</a></li>
<li id="a4"><a href="POP2.php">POP verwijderen</a></li>
<li id="a6"><a href="wijziggegevens.php">wijzig gegevens</a></li>
<li id=""><a href="inzien.php">pop inzien</a></li>
<li id="a6"><a href="overzichtlijstl.php">overzicht leerlingen</a></li>
<li id="a6"><a href="overzichtlijstm.php">overzicht mentorleerlingen</a></li>
<?php }?>
<?php elseif($_SESSION['isLeerling']==1){  ?>
<li id="a4"><a href="wijzig_wachtwoord.php">wijzig wachtwoord</a></li>
<li id="a5"><a href="POP1.php">POP</a></li>
<li id="a6"><a href="POP2.php">POP verwijderen</a></li>
<?php }?>

 
</body>
</html>
