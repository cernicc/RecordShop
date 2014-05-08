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
                    
                    <span class="editAlbumLabel">
					<label for="naslov">Naslov:</label>
                    </span>
                    
                    <span class="uredi2">
                    <input type="Naslov">
                    </span>
                    <br>
                    <br>
                    
                    
                    <span class="editAlbumLabel">
					<label for="opis">Opis:</label>
                    </span>
                    
                    <span class="uredi2">
                    <textarea id="opis" ></textarea>
                    </span>
                    <br>
                    <br>
                    
                    
                     <span class="editAlbumLabel">
					<label for="slika">Slika:</label>
                    </span>
                    
                    <span class="uredi2">
                    <input id="slika" type="text">
                    </span>
                    <br>
                    <br>
                    
                     <span class="editAlbumLabel">
					<label for="leto">Leto:</label>
                    </span>
                    
                    <span class="uredi2">
                    <input id="leto" type="text">
                    </span>
                    <br>
                    <br>
                    
                     <span class="editAlbumLabel">
					<label for="cena">Cena:</label>
                    </span>
                    
                    <span class="uredi2">
                    <input id="cena" type="text">
                    </span>
                    <br>
                    <br>
                    
                    
                    
                   <span class="editAlbumLabel">
					<label for="zanr">Žanr:</label>
                   </span>
                   <span class="editAlbumText">
		                    <?php
							$sql = "SELECT id_zanr, ime FROM zanr";
							$result = mysql_query($sql);
							
							echo "<select name='zanr'>";
							while ($row = mysql_fetch_array($result)) {
								echo "<option id='zanr' value='" . $row['id_zanr'] . "'>" . $row['ime'] . "</option>";
							}
							echo "</select>";
							
							?>
                            </span>
                            <br>
                            <br>
                            
                   <span class="editAlbumLabel">
					<label for="izvajalec">Izvajalec:</label>
                   </span>
                            <span class="editAlbumText">
                            <?php
							$sql = "SELECT id_izvajalec, ime FROM izvajalec";
							$result = mysql_query($sql);
							
							echo "<select name='zanr'>";
							while ($row = mysql_fetch_array($result)) {
								echo "<option id='izvajalec' value='" . $row['id_izvajalec'] . "'>" . $row['ime'] . "</option>";
							}
							echo "</select>";
							
							?>
                            </span>
                    
                    </span>
                    <br>
                    <br>
                    <input id="submit" type="submit">
                    <script>
						$('#submit').click(function() {
						var emptyInputs = $(this).parent().find('input[type="text"]').filter(function() { 
						return $(this).val() == ""; });
						if (emptyInputs.length) {
							alert('Pozor prazna polja!');
						}
					});
					</script>
					  <div class="clear"> </div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			<?php include "footer.php";?>  <!-- Footer -->
        </div> <!---End-wrap--->
	</body>
</html>
