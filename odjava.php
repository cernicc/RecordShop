<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['isAdmin'])) {
  	unset($_SESSION['id']);
	unset($_SESSION['isAdmin']);
}
header("location: index.php");
exit();
?>