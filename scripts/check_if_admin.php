<?php
if(!isset($_SESSION['id'])) {
	echo 'Nisi vpisan !!';
	header("location:index.php");
	die();
	
} else {
	if ($_SESSION['jeAdmin'] != 1){
    	
    }
}
?>