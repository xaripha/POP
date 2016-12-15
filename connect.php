<?php
session_start();// de sessie laten starten
$server="localhost"; //je eigen pc
$user="root";
$pass="usbw";
$db="pop"; //database wat gebruikt wordt
$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!".mysqli_connect_error());
?>