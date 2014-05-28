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
				<div class="contact">
					<div class="section group">
						<div class="col span_2_of_3">
				  			<div class="contact-form">
								<?php
                                $username = "";
                                $email = "";
                                $password = "";
                                $name = "";
                                $surname = "";
								// if already logged in redirect to index
								if (isset($_SESSION['username']))
								{
									header("location:index.php");
									die();
								  }
								$userExists = false;

								if (isset($_POST['register'])  ){
																
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

										$username = $_POST['username'];
										$email = $_POST['email'];
										$password = $_POST['password'];
										$password = hash('md5', $password);
										$name = $_POST['name'];
										$surname = $_POST['surname'];



                                        if(trim($username, " ") =="" || trim($email) =="" || $password==hash('md5',"") || trim($name) =="" || trim($surname) =="" || $userExists){
                                            echo "<h3>Registracija uporabnika</h3>";
                                            echo "<form id='registerForm' name='registerForm' action='registriraj.php' method='POST'>";
                                            echo "<div>";
                                            echo "<span><label>IME</label></span>";

                                            if(trim($name)==""){
                                                echo "<span><input type='text' name='name' id='txtName'><span>";
                                                echo "<p1>* vpišite ime!</p1>";
                                            }
                                            else{
                                                echo "<span><input type='text' name='name' id='txtName' value='$name'><span>";
                                            }

                                            echo "</div>";
                                            echo "<div>";
                                            echo "<span><label>PRIIMEK</label></span>";

                                            if(trim($surname)==""){
                                                echo "<span><input type='text' name='surname' id='txtSurname'></span>";
                                                echo "<p1>* vpišite priimek!</p1>";
                                            }
                                            else{
                                                echo "<span><input type='text' name='surname' id='txtName' value='$name'><span>";
                                            }
                                            echo "</div>";
                                            echo "<div>";
                                            echo "<span><label>UPORABNIŠKO IME</label></span>";

                                            if($userExists){
                                                echo "<span><input type='text' name='username' id='txtUsername' value='$username'></span>";
                                                echo "<p1>* uporabnik že obstaja!</p1>";
                                                echo "</br>";
                                            }
                                            else if(trim($username)==""){
                                                echo "<span><input type='text' name='username' id='txtUsername'></span>";
                                                echo "<p1>* vpišite uporabniško ime!</p1>";
                                            }
                                            else{
                                                echo "<span><input type='text' name='username' id='txtUsername' value='$username'></span>";
                                            }
                                            echo "</div>";
                                            echo "<div>";
                                            echo "<span><label>GESLO</label></span>";


                                            echo "<span><input type='password' name='password' id='txtPassword'></span>";
                                            if(hash('md5', $password)==""){
                                                echo "<p1>* vpišite geslo!</p1>";
                                            }


                                            echo "</div>";
                                            echo "<div>";
                                            echo "<span><label>EMAIL NASLOV</label></span>";

                                            if($email==""){
                                                echo "<span><input type='email' name='email' id='txtEmail'></span>";
                                                echo "<p1>* vpišite e-poštni naslov!</p1>";
                                            }
                                            else{
                                                echo "<span><input type='email' name='email' id='txtEmail' value='$email'></span>";
                                            }
                                            echo "</div>";
                                            echo "<div>";
                                            echo "<input type='submit' value='Registriraj' name='register' id='btnRegister' >";
                                            echo "</br>";
                                            echo "<p1>Opomba: za uspešno registracijo morajo biti izpolnjena vsa navedena polja</p1>";
                                            echo "</div>";
                                            echo "</form>";
                                        }

                                        else{
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
								if (!isset($_POST['register'])){
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
												echo "<input type='submit' value='Registriraj' name='register' id='btnRegister' >";

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
			<div class="clear"> </div>
			<?php include "footer.php";?>  <!-- Footer -->
        </div> <!---End-wrap--->
	</body>
</html>