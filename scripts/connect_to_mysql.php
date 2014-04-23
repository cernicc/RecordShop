<?php
//začni sejo
session_start();

/// PRIJAVA NA BAZO
// Ime strežnika
$db_host = "localhost";
// Ime uporabnika
$db_username = "root"; 
// Koda
$db_pass = ""; 
// Ime baze
$db_name = "recordshop";

mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("No database");  

// čćšž in UTF-8
/*
$sqlSumniki = "SET NAMES 'utf8' COLLATE 'utf8_slovenian_ci';";
$sqlUTF = "SET CHARACTER SET 'utf8_slovenian_ci';";
mysql_query($sqlUTF);
mysql_query($sqlSumniki);
*/       
?>