<?php
	include "scripts/connect_to_mysql.php";
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
					<div class="products">
						<h5><span>Naša</span> ponudba</h5>
						<div class="section group">
							<?php
        					$sql = "SELECT * FROM album";
							
							$sql1 = "SELECT izvajalec.id_izvajalec, izvajalec.ime, album.opis, album.cena, album.image, album.id_izvajalec, album.id_album, album.naslov
                            FROM izvajalec
                            INNER JOIN album
                            ON izvajalec.id_izvajalec=album.id_izvajalec
                            ORDER BY izvajalec.ime
                            LIMIT 10;";
        
							$result = mysql_query($sql);
							$result1 = mysql_query($sql1);
							if (!$result1) {
								echo "Could not successfully run query ($sql) from DB: " . mysql_error();
								exit;
							}
							
							if (mysql_num_rows($result1) == 0) {
								echo "No rows found, nothing to print so am exiting";
								exit;
							}
							
							// While a row of data exists, put that row in $row as an associative array
							// Note: If you're expecting just one row, no need to use a loop
							// Note: If you put extract($row); inside the following loop, you'll
							//       then create $userid, $fullname, and $userstatus
                            $i = 0;
							while ($row = mysql_fetch_assoc($result1)) {
                                if($i==0){
                                    echo('<p>'."     ".'</p>');
                                }
                                if($i == 10){
                                    break;
                                }
								if (strlen($row["opis"]) > 80) {

    							    $stringCut = substr($row["opis"], 0, 80);
    								$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
								}
								else {
									$string = $row["opis"];
								}
								
								echo '<div class="grid_1_of_5 images_1_of_5"> <img src="album_images/'.$row["image"].'">';
								echo '<h3>'.$row["ime"].'</h3>';
								echo '<h3>'.$row["naslov"].'</h3>';
								echo '<p>'.$string.'</p>';
								echo '<h4> $'.$row["cena"].'</h4>';

                                if (isset($_SESSION['id'])){
                                    echo '<form id="form1" name="form1" method="post" action="cart.php">';
                                    echo '<input type="submit" name="button" id="button"  value="Dodaj v košarico" />';
                                    echo '<input type="hidden" name="pid" id="pid" value='. $row["id_album"] .' />';

                                    //echo '<ul><li><a type="submit" href="cart.php"><img src="images/cart.png" style="height: 15px"  title="cart"/></a></li></ul>';

                                    echo '</form>';
                                }
                                echo '<div class="button"><span><a href="album.php?id='.$row["id_album"].'"> Prikaži več </a></span></div>';


								echo '</div>';
							    $i++;
							}
							
							mysql_free_result($result1);
							
							?>
						<div class="clear"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			<?php include "footer.php";?>  <!-- Footer -->
        </div> <!---End-wrap--->
	</body>
</html>