<?php
include "poveziZBazo.php";
// unset session and redirect to index
unset($_SESSION['username']);
unset($_SESSION['isAdmin']);
header("location:index.php");
die();
?>
