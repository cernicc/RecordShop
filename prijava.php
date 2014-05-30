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
        <script> 
			$('#submit').live('click', function (event) {
			var form_data=$("#contact").serializeArray();
			var error_free=true;
			for (var input in form_data){
				var element=$("#contact_"+form_data[input]['name']);				
				if(!($('#'+form_data[input]['name']).val().length > 0)){
					error_free = false;					
				}
			}
			if (!error_free){
				alert("Pozor prazna polja!");
			}
			else{
				
			}
		});
		</script>
    </head>
    <body>
        <div class="wrap"> <!---start-wrap--->
            <?php include "header.php";?>  <!-- Header -->
            <div class="content">
                <div class="contact">             	
                    <div class="section group">
                        <div class="col span_2_of_3">
                        	<h3>Prijava</h3> 
                            <div class="contact-form">
								<?php
                                if (isset($_SESSION['id'])){ // Uporabnik že prijavljen
                                    header("location:index.php");
                                    die();
                                } else { // Prikažemo prijavno okno
									echo '
									<div class="contact-form">
										<form id="contact" action="" method="POST">
										<div>
											<span><label>Uporabniško ime</label></span>
											<span><input name="upIme" id="upIme" type="text" ></span>
										</div>
										<div>
											<span><label>Geslo</label></span>
											<span><input name="geslo" id="geslo" type="password" ></span>
										</div>
										<div>
											<span><input name="submit" id="submit" type="submit" value="Prijavi"></span>
										</div>
										</form>
									</div>';
									
									if (isset($_POST['upIme'])){ // Uporabnisko ime je nastavljeno
										  $upIme = $_POST['upIme'];
										  $upIme = stripslashes($upIme);
										  $upIme = strip_tags($upIme);
										  $upIme = mysql_real_escape_string($upIme);
										  $upIme = str_replace( "`", " ", $upIme);
								  
										  $geslo = $_POST['geslo'];
										  $geslo = stripslashes($geslo);
										  $geslo = strip_tags($geslo);
										  $geslo = mysql_real_escape_string($geslo);
										  $geslo = str_replace( "[^A-Za-z0-9", " ", $geslo);
										  $geslo = md5($geslo);
										  $sql = mysql_query("SELECT * 
															  FROM uporabnik 
															  WHERE uporabnisko_ime='$upIme' 
															  AND geslo='$geslo'"); 
									  
										  $login_check = mysql_num_rows($sql);
										  
										  if($login_check > 0) { // Poizvedba vrne vrstico
											  while($row = mysql_fetch_array($sql)) { 
												  $_SESSION['id'] = $row["id_uporabnik"];
												  $_SESSION['jeAdmin'] = $row["je_admin"];
  
												  header("location:index.php");
												  exit();
											  }
										  } else { // poizvedba je prazna
											  echo '
											  <p>
											  Uporabnik ne obstaja.
											  </p>';
										  }
									  }
								}
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	<div class="clear"> </div>
			<?php include "footer.php"; ?>  <!-- Footer -->
        </div> <!---End-wrap--->
	</body>
</html>