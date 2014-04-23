<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['jeAdmin'])) {
  	unset($_SESSION['id']);
	unset($_SESSION['jeAdmin']);
}
header("location: index.php");
exit();
?>