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
                		<h5><span>NOVI </span>ALBUMI</h5>
                		<div class="section group">
                			<?php
        					$sql = "SELECT * FROM album ORDER BY id_album DESC LIMIT 10";
        
							$result = mysql_query($sql);
							
							if (!$result) {
								echo "Could not successfully run query ($sql) from DB: " . mysql_error();
								exit;
							}
							
							if (mysql_num_rows($result) == 0) {
								echo "No rows found, nothing to print so am exiting";
								exit;
							}
							
							// While a row of data exists, put that row in $row as an associative array
							// Note: If you're expecting just one row, no need to use a loop
							// Note: If you put extract($row); inside the following loop, you'll
							//       then create $userid, $fullname, and $userstatus
														
							while ($row = mysql_fetch_assoc($result)) {
								if (strlen($row["opis"]) > 80) {

    							    $stringCut = substr($row["opis"], 0, 80);
    								$string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
								}
								else {
									$string = $row["opis"];
								}
								
								echo '<div class="grid_1_of_5 images_1_of_5"> <img src="album_images/'.$row["image"].'">';
								echo '<h3>'.$row["naslov"].'</h3>';
								echo '<p>'.$string.'</p>';
								echo '<h4> $'.$row["cena"].'</h4>';
								echo '<div class="button"><span><a href="album.php?id='.$row["id_album"].'"> Read More </a></span></div>';
								echo '</div>';
							
							}
							
							mysql_free_result($result);
							
							?>
                		</div>
              		</div>
            	</div>
          	</div>    
        	<div class="clear"> </div>
			<?php include "footer.php";?>  <!-- Footer -->
        </div> <!---End-wrap--->
	</body>
</html>