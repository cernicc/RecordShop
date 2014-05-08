<?php
include "scripts/connect_to_mysql.php";
$error = '';

// Uporabnik poskuša dodati album v košarico
if (isset($_POST['pid'])) {
    $pid = $_POST['pid'];
	$wasFound = false;
	$i = 0;
	
	if (!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1) {
		// Če seja ni nastavljena oz. je array prazen
		$_SESSION["cart_array"] = array(0 => array("item_id" => $pid, "quantity" => 1));
	} else {
		// Če ima košarica vsaj en album
		foreach ($_SESSION["cart_array"] as $each_item) { 
			$i++;
		    while (list($key, $value) = each($each_item)) {
				if ($key == "item_id" && $value == $pid) {
					// Album je že v košarici, torej moramo popraviti njegovo količino
					array_splice($_SESSION["cart_array"], $i-1, 1, array(array("item_id" => $pid, "quantity" => $each_item['quantity'] + 1)));
					$wasFound = true;
				}
			}
		}
		if ($wasFound == false) {
			array_push($_SESSION["cart_array"], array("item_id" => $pid, "quantity" => 1));
		}
	}
	header("location: cart.php"); 
    exit();
}

// Izprazni košarico
if (isset($_GET['cmd']) && $_GET['cmd'] == "emptycart") {
    unset($_SESSION["cart_array"]);
}

// Uporabnik popravi količino 
if (isset($_POST['item_to_adjust']) && $_POST['item_to_adjust'] != "") {
	$item_to_adjust = $_POST['item_to_adjust'];
	$quantity = $_POST['quantity'];
	$quantity = preg_replace('#[^0-9]#i', '', $quantity); // filtriraj vse razen številk
	if ($quantity >= 100) { $quantity = 99; }
	if ($quantity < 1) { $quantity = 1; }
	if ($quantity == "") { $quantity = 1; }
	$i = 0;
	foreach ($_SESSION["cart_array"] as $each_item) { 
		$i++;
		while (list($key, $value) = each($each_item)) {
			if ($key == "item_id" && $value == $item_to_adjust) {
				// Album je že v košarici torej popravimo količino
				array_splice($_SESSION["cart_array"], $i-1, 1, array(array("item_id" => $item_to_adjust, "quantity" => $quantity)));
			} 
		} 
	} 
}

// Uporabnik želi odstranit album iz košarice
if (isset($_POST['index_to_remove']) && $_POST['index_to_remove'] != "") {
 	$key_to_remove = $_POST['index_to_remove'];
	if (count($_SESSION["cart_array"]) <= 1) {
		unset($_SESSION["cart_array"]);
	} else {
		unset($_SESSION["cart_array"]["$key_to_remove"]);
		sort($_SESSION["cart_array"]);
	}
}

if (isset($_GET['cmd']) && $_GET['cmd'] == "succes") {
	$error = 'Uspešno naročeno';
}

// Sestavi košarico za uporabnika
$cartOutput = "";
$cartTotal = "";
$pp_checkout_btn = '';
$product_id_array = '';
if (!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1) {
    $cartOutput = "<h2 align='center'>Košarica je prazna</h2>";
} else {
	// Start PayPal Checkout Button
	$pp_checkout_btn .= '<form action="scripts/buy.php" method="post">';
	// Start the For Each loop
	$i = 0; 
    foreach ($_SESSION["cart_array"] as $each_item) { 
		$item_id = $each_item['item_id'];
		$sql = mysql_query("SELECT * FROM album WHERE id_album='$item_id' LIMIT 1");
		while ($row = mysql_fetch_array($sql)) {
			$product_name = $row["naslov"];
			$image = $row["image"];
			$price = $row["cena"];
		}
		$pricetotal = $price * $each_item['quantity'];
		$cartTotal = $pricetotal + $cartTotal;
		$x = $i + 1;
		$pp_checkout_btn .= '<input type="hidden" name="item_name_' . $x . '" value="' . $product_name . '">
        <input type="hidden" name="amount_' . $x . '" value="' . $price . '">
        <input type="hidden" name="quantity_' . $x . '" value="' . $each_item['quantity'] . '">  ';
		// Create the product array variable
		$product_id_array .= "$item_id-".$each_item['quantity'].","; 
		// Dynamic table row assembly
		$cartOutput .= "<tr>";
		$cartOutput .= '<td><a href="album.php?id=' . $item_id . '">' . $product_name . '</a><br /><img src="album_images/' . $item_id . '.jpg" alt="' . $product_name. '" width="40" border="1" /></td>';
		$cartOutput .= '<td>$' . $price . '</td>';
		$cartOutput .= '<td><form action="cart.php" method="post">
		<input name="quantity" type="text" value="' . $each_item['quantity'] . '" size="1" maxlength="2" />
		<input name="adjustBtn' . $item_id . '" type="submit" value="change" />
		<input name="item_to_adjust" type="hidden" value="' . $item_id . '" />
		</form></td>';
		$cartOutput .= '<td>' . $pricetotal . ' €</td>';
		$cartOutput .= '<td><form action="cart.php" method="post"><input name="deleteBtn' . $item_id . '" type="submit" value="X" /><input name="index_to_remove" type="hidden" value="' . $i . '" /></form></td>';
		$cartOutput .= '</tr>';
		$i++; 
    } 
	$cartTotal = "<div style='font-size:18px; margin-top:12px;' align='right'>Cena vozička : ".$cartTotal." €</div>";
    // Finish the Paypal Checkout Btn
	$pp_checkout_btn .= '<input type="hidden" name="custom" value="' . $product_id_array . '">
	<input type="image" width="20%" src="images/kupi.png" name="submit" alt="Kupi!">
	</form>';
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Music Store</title>
		<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	</head>
	<body>
		<div class="wrap"> <!---start-wrap--->
			<?php include "header.php";?>  <!-- Header -->
			<div class="content">
				<div class="products-box">
                	<div class="clear"> </div>
					<div class="products">
						<h5><span>Košarica</span></h5>
						<div style="margin:24px; text-align:left;">
                            <br />
                            <table width="100%" border="1" cellspacing="0" cellpadding="6">
                              <tr>
                                <td width="18%" bgcolor="#fc3019"><strong>Album</strong></td>
                                <td width="10%" bgcolor="#fc3019"><strong>Cena</strong></td>
                                <td width="9%" bgcolor="#fc3019"><strong>Količina</strong></td>
                                <td width="9%" bgcolor="#fc3019"><strong>Skupaj</strong></td>
                                <td width="9%" bgcolor="#fc3019"><strong>Odstrani</strong></td>
                              </tr>
                             <?php echo $cartOutput; ?>
                            </table>
                            <?php echo $cartTotal; ?>
                            <br />
                        <br />
                        <?php echo $pp_checkout_btn; ?>
                            <br />
                            <br />
                            <a href="cart.php?cmd=emptycart">Izprazni vsebino vozička</a>
                        <h3><?php echo $error; ?></h3>
                        </div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			<?php include "footer.php";?>  <!-- Footer -->
        </div> <!---End-wrap--->
	</body>
</html>