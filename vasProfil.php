<?php
include_once "scripts/connect_to_mysql.php";
//include_once "scripts/check_if_logged_in.php";

$id = 1; //$_SESSION['id'];
$error = "";
	
$sql = "SELECT *
		FROM uporabnik 
		WHERE id_uporabnik ='".$id."'";
	
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
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
				<div class="sub-header-right">
					<ul>
						<li><a href="#">Profil</a></li>
						<li><a href="#">Košarica: (Prazno) <img src="images/cart.png" title="cart" /></a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<div class="top-nav">
				<ul>
					<li><a href="index.php">Domov</a></li>
					<li><a href="najljubsi.php">Najljubši</a></li>
					<li><a href="izvajalci.php">Izvajalci</a></li>
					<li><a href="kontakt.php">Kontakt</a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<!---end-top-header--->
			<!---End-header--->
			</div>
				<div class="content">
					<div class="contact">
				  		<h3>Vas Profil</h3>
                        <div class="contact-form">
                        	<table width="70%">
                            	<tr>
                                	<td width="40%">Ime: </td>
                                    <td><?php echo $row['ime'];?></td>
                                </tr>
                                <tr>
                                	<td>Priimek: </td>
                                    <td><?php echo $row['priimek'];?></td>
                                </tr>
                                <tr>
                                	<td>E-mail: </td>
                                    <td><?php echo $row['email'];?></td>
                                </tr>
                                <tr>
                                	<td>Naslov: </td>
                                    <td><?php echo $row['naslov'];?></td>
                                </tr>
                            </table>
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
				<div class="col_1_of_4 span_1_of_4">
					<h3>Profil</h3>
					<ul>
						<li><a href="registriraj.php">Registracija</a></li>
						<li><a href="vasprofil.php">Vaš profil</a></li>
						<li><a href="urediprofil.php">Uredi profil</a></li>						
					</ul>
				</div>
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