<?php
if(!isset($_SESSION['id'])) {
	echo 'Nisi vpisan !!';
	exit();
} else {
	$id = $_SESSION['id'];
}
?>