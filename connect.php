<?php
 session_start(); 
$server="localhost"; //je eigen pc
$user="root";
$pass="usbw";
$db="pop"; //database waar we nu mee gaan experimenteren
$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!".mysqli_connect_error());
?>