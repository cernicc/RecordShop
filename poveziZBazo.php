<?php
    //zacčni novo sejo
    session_start();
    //poveži se z bazo
    $dbname = 'recordshop';
    $dbuser     = 'root';
    $dbpass     = '';
    $dbhost     = 'localhost'; // localhost should suffice
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or exit(mysql_error());
    mysql_select_db($dbname, $conn) or exit(mysql_error());

    if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
    }

    if (!mysql_select_db($dbname)) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
    }

    // čćšž in UTF-8
    $sqlSumniki = "SET NAMES 'utf8' COLLATE 'utf8_slovenian_ci';";
    $sqlUTF = "SET CHARACTER SET 'utf8_slovenian_ci';";
    mysql_query($sqlUTF);
    mysql_query($sqlSumniki);

?>