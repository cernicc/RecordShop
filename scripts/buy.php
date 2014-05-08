<?php

if ($_SERVER['REQUEST_METHOD'] != "POST") die ("No Post Variables");

require_once 'connect_to_mysql.php';

$product_id_string = $_POST['custom'];
$product_id_string = rtrim($product_id_string, ","); 
$id_str_array = explode(",", $product_id_string);
$fullAmount = 0;
foreach ($id_str_array as $key => $value) {
    
	$id_quantity_pair = explode("-", $value); // Uses Hyphen(-) as delimiter to separate product ID from its quantity
	$product_id = $id_quantity_pair[0]; // Get the product ID
	$product_quantity = $id_quantity_pair[1]; // Get the quantity
	$sql = mysql_query("SELECT cena FROM album WHERE id_album='$product_id' LIMIT 1");
    while($row = mysql_fetch_array($sql)){
		$product_price = $row["cena"];
	}
	$product_price = $product_price * $product_quantity;
	$fullAmount = $fullAmount + $product_price;
}
$custom = $_POST['custom'];
$userID = $_SESSION['id'];
$sql = mysql_query("INSERT INTO nakup (datum, cas, id_album_array, id_uporabnik) 
   VALUES(CURDATE(),CURTIME(),'$custom','$userID')") or die ("unable to execute the query");

header("Location: ../cart.php?cmd=succes");
mysql_close();
?>