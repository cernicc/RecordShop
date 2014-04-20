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
        <?php
            include "poveziZBazo.php"
        ?>
		<!---start-wrap--->
		<div class="wrap">
			<!---start-header--->
			<div class="header">
			<div class="sub-header">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="logo" /></a>
				</div>
				<div class="sub-header-center">
					<form>
						<input type="text"><input type="submit"  value="Išči" />
					</form>


				</div>
                <?php
                    include "header.php";
                ?>
				<div class="clear"> </div>
			</div>       
			<div class="clear"> </div>
			<div class="top-nav">
				<ul>
					<li><a href="index.php">Domov</a></li>
					<li><a href="najljubsi.php">Najljubši</a></li>
					<li><a href="ustvarjalci.php">Ustvarjalci</a></li>
					<li><a href="kontakt.php">Kontakt</a></li>
					<div class="clear"> </div>
				</ul>
			</div>
            
            <div id="login-box" class="login-popup">
				<a href="index.php" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
  				<form method="post" class="signin" action="#">
					<fieldset class="textbox">
					<label class="username">
						<span>Uporabniško ime</span>
						<input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Uporabniško ime">
					</label>
					<label class="password">
						<span>Geslo</span>
						<input id="password" name="password" value="" type="password" placeholder="Geslo">
					</label>
					<button class="submit button" type="button">Vpiši me!</button>
					<p>
						<a class="forgot" href="#">Ste pozabili geslo?</a>
						<br/>
						<a clas="forgot" href="registriraj.php">Še nimate našega računa?</a>
					</p>        
					</fieldset>
				</form>
			</div>
			<!---end-top-header--->
			<!---End-header--->
			</div>
				<div class="content">
					<div class="contact">
						<div class="section group">				
						
				<div class="col span_2_of_3">
				  <div class="contact-form">
					<?php
						 // if already logged in redirect to index
						  if (isset($_SESSION['username']))
						  {
							header("location:index.php");
							die();
						  }
						$userExists = false;
						if (isset($_POST['register'])){
														
							$dbname = 'recordshop'; 
							$dbuser     = 'root'; 
							$dbpass     = ''; 
							$dbhost     = 'localhost'; // localhost should suffice 
							$conn = mysql_connect($dbhost, $dbuser, $dbpass) or exit(mysql_error()); 
							mysql_select_db($dbname, $conn) or exit(mysql_error());

							if (!$conn) {
                                echo "Unable to connect to DB: " . mysql_error();
                                exit;
                            }

                            if (!mysql_select_db($dbname)) {
                                echo "Unable to select mydbname: " . mysql_error();
                                exit;
                            }
							
							$username = $_POST['username'];
							$sql = "SELECT * FROM uporabnik WHERE uporabnisko_ime= '$username'";
							$query = mysql_query($sql);

							if (!$query) {
								echo "Could not successfully run query ($sql) from DB: " . mysql_error();
								exit;
							}

							if (mysql_num_rows($query) > 0) {
								$userExists = true;								
							}
							
							
							/*
							// connect to db
							$dbConn = mysqli_connect("localhost");
							$dbConn->select_db("recordshop.sql");
							// čćšž
									mysqli_query($dbConn, "SET NAMES 'utf8' COLLATE 'utf8_slovenian_ci';");
									mysqli_query($dbConn, "SET CHARACTER SET 'utf8_slovenian_ci';");	
							echo "DREK";
							
							$username = $_POST['username'];
							$sqlSelect = "SELECT * FROM uporabnik WHERE uporabnisko_ime = '$username'";
							$query = mysqli_query($dbConn, $sqlSelect);
							if (mysqli_num_rows($query) > 0){
								$userExists = true;
							}
							*/
							else{ 
								$username = $_POST['username'];
								$email = $_POST['email'];
								$password = $_POST['password'];
								$password = hash('sha512', $password);
								$name = $_POST['name'];
								$surname = $_POST['surname'];		
								$sqlInsert = "INSERT INTO uporabnik (uporabnisko_ime, geslo, ime, priimek, email)
												VALUES ('$username', '$password', '$name', '$surname', '$email');";
								// execute sqlInsert
								$sqlSumniki = "SET NAMES 'utf8' COLLATE 'utf8_slovenian_ci';";
								$sqlUTF = "SET CHARACTER SET 'utf8_slovenian_ci';";
								mysql_query($sqlUTF);
								mysql_query($sqlSumniki);
								mysql_query($sqlInsert);
								//mysqli_query($dbConn, $sqlInsert);
								echo "Uporabnik $username uspešno registriran!";
                                echo "</br>";
                                echo "Čez par sekund boste preusmerjeni na stran za prijavo!";
                                header("refresh:5; url=index.php");

							}
						}
						if (!isset($_POST['register']) || $userExists){
							echo "<h3>Registracija uporabnika</h3>";
								echo "<form id='registerForm' name='registerForm' action='registriraj.php' method='POST'>";
									echo "<div>";
										echo "<span><label>IME</label></span>";
										echo "<span><input type='text' name='name' id='txtName'><span>";
									echo "</div>";
									echo "<div>";
										echo "<span><label>PRIIMEK</label></span>";
										echo "<span><input type='text' name='surname' id='txtSurname'></span>";
									echo "</div>";
									echo "<div>";
										echo "<span><label>UPORABNIŠKO IME</label></span>";
										echo "<span><input type='text' name='username' id='txtUsername'></span>";
									echo "</div>";
									echo "<div>";
										echo "<span><label>GESLO</label></span>";
										echo "<span><input type='password' name='password' id='txtPassword'></span>";
									echo "</div>";
									echo "<div>";
										echo "<span><label>EMAIL NASLOV</label></span>";
										echo "<span><input type='email' name='email' id='txtEmail'></span>";
									echo "</div>";
								   echo "<div>";
										echo "<input type='submit' value='Registriraj' name='register' id='btnRegister'>";
									   echo "<p1>Opomba: za uspešno registracijo morajo biti izpolnjena vsa navedena polja</p1>";
								   echo "</div>";
								echo "</form>";

						}			
					?>
				    </div>
  				</div>				
			  </div>
			 </div>
			</div>
            
		</div>
			<div class="clear"> </div>
			<div class="footer">
				<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Informacije</h3>
					<ul>
						<li><a href="onas.html">O nas</a></li>
						<li><a href="kontakt.php">Kontakt</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Ponudba</h3>
					<ul>
						<li><a href="novialbumi.php">Novo</a></li>
						<li><a href="najljubsi.php">Najljubši</a></li>
					</ul>
				</div>

                    <?php
                    include 'footer.php'
                    ?>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>Povežite se z nami</h3>
					<ul>
						<li><a href="#"><img src="images/facebook.png" title="facebook" /></a></li>
						<li><a href="#"><img src="images/twitter.png" title="Twiiter" /></a></li>
						<li><a href="#"><img src="images/rss.png" title="Rss" /></a></li>
						<li><a href="#"><img src="images/gpluse.png" title="Google+" /></a></li>
					</ul>
					<p>Izdelali smo <a href="#">Rok Černič</a>, <a href="#">Jaka Plut</a>, <a href="#">Robert Rozina</a></p>
				</div>
			</div>
			</div>
		</div>
		<!---End-wrap--->
	</body>
</html>