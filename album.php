<?php 
include "scripts/connect_to_mysql.php"; 

if (isset($_GET['id'])) {
	$id = preg_replace('#[^0-9]#i', '', $_GET['id']); 
	
	$sql = mysql_query("SELECT naslov, image, leto, cena, (select zanr.ime from zanr where zanr.id_zanr = album.id_zanr) AS zanr, (select izvajalec.ime from izvajalec where album.id_izvajalec = izvajalec.id_izvajalec) AS izvajalec, opis FROM album WHERE id_album='$id' LIMIT 1");
	$productCount = mysql_num_rows($sql);
    if ($productCount > 0) {
		// Album obstaja
		while($row = mysql_fetch_array($sql)){ 
			 $name = $row["naslov"];
			 $image = $row["image"];
			 $year = $row["leto"];
			 $price = $row["cena"];
			 $artist = $row["izvajalec"];
			 $genre = $row["zanr"];
			 $description = $row["opis"];
         }
	} else {
		echo "Album ne obstaja..";
	    exit();
	}	
} else {
	echo "Zgodila se je napaka. Prosim poskusite ponovno.";
	exit();
}
mysql_close();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Music Store</title>
		<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.6.js" type="text/javascript"></script>
		<script src="js/jquery.jqzoom-core.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/jquery.jqzoom.css" type="text/css">
	</head>
	<body>
		<div class="wrap"> <!---start-wrap--->
			<?php include "header.php";?>  <!-- Header -->
			<div class="content">
				<div class="single-page"><br />
					<div class="clear"> </div>
					<div class="product-info">
						<div class="product-image">
							<div class="clearfix" id="content" >
							    <div class="clearfix">
							        <img src="album_images/<?php echo $image; ?>"  title="triumph"  style="border: 1px solid rgba(102, 102, 102, 0.2);">
							    </div>
							</div>
						</div>
						<div class="product-price-info">
							<div class="product-value">
								<h4><?php echo $name; ?></h4>
								<ul>
									<li><h2>Cena :</h2></li>
									<li><h5><?php echo $price; ?> €</h5></li>
								</ul>
                                <ul>
									<li><h2>Leto izdaje albuma :</h2></li>
									<li><h5><?php echo $year; ?></h5></li>
								</ul>
                                <ul>
									<li><h2>Žanr :</h2></li>
									<li><h5><?php echo $genre; ?></h5></li>
								</ul>
                                <ul>
									<li><h2>Izvajalec :</h2></li>
									<li><h5><?php echo $artist; ?></h5></li>
								</ul>
                                <ul>
									<li><h2>Opis :</h2></li>
									<li><h5><?php echo $description; ?></h5></li>
								</ul>
							</div>
							<div class="product-description">
                            <form method="post">
                            	<form name="id" type="hidden" value= "<?php echo $id?>">
                            </form>
                            	<?php
                            		if (isset($_SESSION['id'])){
										echo '<form id="form1" name="form1" method="post" action="cart.php">';
                                		echo '<input type="hidden" name="pid" id="pid" value='. $id .' />';
                                    	echo '<input type="submit" name="button" id="button" value="Dodaj v košarico" />';
                                		echo '</form>';
										if ($_SESSION['jeAdmin'] == 1){
											echo '<div class="button"><span><a href="editALbum.php?id='.$id.'"> Uredi </a></span></div>';
										}
									}
									
									else {
										echo '<p>Prosim prijavite se za naročilo</p>';
									}
									
									
								?>
								
							</div>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			<?php include "footer.php";?>  <!-- Footer -->
        </div> <!---End-wrap--->
	</body>
</html>

