<!DOCTYPE HTML>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Music Store</title>
		<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
	</head>
	<body>

        <?php
            include "poveziZBazo.php";
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

				    include 'header.php';

                /*
                // preverimo, če je uporabnik že prijavljen, če teče seja...
                if (isset($_SESSION['username'])){
                    header("location:index.php");
                    die();
                }


                else{

                    $username = "";
                    $match = true;


                    if (isset($_POST['login'])){
                        $username = $_POST['username'];
                        //echo "$username";
                        $dbname = 'recordshop';
                        $dbuser     = 'root';
                        $dbpass     = '';
                        $dbhost     = 'localhost'; // localhost should suffice
                        // povežemo se v bazo
                        $conn = mysql_connect($dbhost, $dbuser, $dbpass) or exit(mysql_error());
                        // preverimo ali uporabnik obstaja

                        mysql_select_db($dbname, $conn) or exit(mysql_error());

                        if (!$conn) {
                            echo "Unable to connect to DB: " . mysql_error();
                            exit;
                        }

                        if (!mysql_select_db($dbname)) {
                            echo "Unable to select mydbname: " . mysql_error();
                            exit;
                        }

                        $sqlSelect = "SELECT * FROM uporabnik WHERE uporabnisko_ime = '$username'";
                        $query = mysql_query($sqlSelect);

                        if (!$query) {
                            echo "Could not successfully run query ($query) from DB: " . mysql_error();
                            exit;
                        }

                        // uporabnik ne obstaja
                        if (mysql_num_rows($query) == 0)
                            $match = false;
                        else{
                            $password = $_POST['password'];
                            $password = hash("sha512", $password);

                            // preveri uporabnikove podatke
                            $user = mysql_fetch_array($query);
                                if ($password == $user['geslo']){
                                    // set session
                                    $_SESSION['username'] = $username;
                                    // isAdmin?
                                    $isAdmin = $user['je_admin'];
                                    $_SESSION['isAdmin'] = $isAdmin;
                                    echo "UPORABNIK VPISAN";
                                    // redirect to index
                                    header("location:index.php");

                                    die();
                                }
                                // don't match
                                else{
                                    $match = false;
                                }

                            }
                        }

                        if (!isset($_POST['login']) || !$match){
                            echo "<div id='login-box' name='loginBox' action='index.php' mathod='POST' class='login-popup'>";
                            echo "<a href='index.php' class='close'><img src='images/close_pop.png' class='btn_close' title='Close Window' alt='Close' /></a>";
                            echo "<form method='post' class='signin' action='#'>";
                                echo "<fieldset class='textbox'>";
                                echo "<label class='username'>";
                                    echo "<span>Uporabniško ime</span>";
                                    echo "<input id='username' name='username' type='text' autocomplete='on' placeholder='Uporabniško ime'>";
                                echo "</label>";
                                echo "<label class='password'>";
                                    echo "<span>Geslo</span>";
                                    echo "<input id='password' name='password'  type='password' placeholder='Geslo'>";
                                echo "</label>";
                                // echo "<button class='submit button' type='button'>Vpiši me!</button>";
                                echo "<input type='submit' value='Vpiši me!' name='login' id='btnLogin' class='submit button'>";
                                echo "<p>";
                                    echo "<a class='forgot' href='#'>Ste pozabili geslo?</a>";
                                    echo "<br/>";
                                    echo "<a class='forgot' href='registriraj.ph'>Še nimate našega računa?</a>";
                                echo "</p>";
                                echo "</fieldset>";
                            echo "</form>";
                        echo "</div>";
                        }
                    }
                */
                ?>

				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<div class="top-nav">
				<ul>
					<li class="active1"><a href="index.php">Domov</a></li>
					<li><a href="najljubsi.php">Najljubši</a></li>
					<li><a href="izvajalci.php">Izvajalci</a></li>
					<li><a href="kontakt.php">Kontakt</a></li>
					<div class="clear"> </div>
				</ul>
			</div>





                
			<!---end-top-header--->
			<!---End-header--->
			</div>
			
				<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/slider1.jpg" alt=""></li>
					      <li><img src="images/slider3.jpg" alt=""></li>
					      <li><img src="images/slider1.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
				<div class="content">
					<div class="products-box">
					<div class="products">
						<h5><span>Naša</span> ponudba</h5>
						<div class="section group">
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/a4.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><label>$700.00</label>$512.00</h4>
							     <div class="button"><span><a href="singlepage.html">Preberi več</a></span></div>
						   </div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/a5.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								<h4><label>$700.00</label>$300.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
						    </div>
							<div class="grid_1_of_5 images_1_of_5">
								<img src="images/a6.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><label>$700.00</label>$120.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
							</div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/a7.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><label>$700.00</label>$500.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
							</div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/a8.jpg">
								 <h3>Lorem Ipsum is simply</h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><label>$600.00</label>$120.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
							</div>
						</div>
						<div class="section group">
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/a9.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><span>$600.00</span>$512.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
						   </div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/a10.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><span>$400.00</span>$352.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
						    </div>
							<div class="grid_1_of_5 images_1_of_5">
								<img src="images/a11.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								  <h4><span>$300.00</span>$202.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
							</div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/a12.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><span>$400.00</span>$322.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
							</div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/a1.jpg">
								 <h3>Lorem Ipsum is simply</h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><span>$700.00</span>$602.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
							</div>
							<a class="button1" href="#">Poglej vse</a>
						<div class="clear"> </div>
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