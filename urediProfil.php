<?php
include_once "scripts/connect_to_mysql.php";
//include_once "scripts/check_if_logged_in.php";

$id = 1; //$_SESSION['id'];
$error = "";
	
$sql = "SELECT *
		FROM uporabnik 
		WHERE id_uporabnik ='".$id."'";
	
$result = mysql_query($sql);
	
if(mysql_num_rows($result) == 0) {
	echo 'Uporabnik ne obstaja.';
	exit();
} else {
	$row = mysql_fetch_array($result);
		
	if(isset($_POST['ime']) || isset($_POST['priimek']) || isset($_POST['email']) || isset($_POST['naslov'])){	
		$ime = $_POST['ime'];
		$ime = stripslashes($ime);
		$ime = strip_tags($ime);
		$ime = mysql_real_escape_string($ime);
		$ime = str_replace( "[^A-Za-z0-9", " ", $ime);
		
		$priimek = $_POST['priimek'];
		$priimek = stripslashes($priimek);
		$priimek = strip_tags($priimek);
		$priimek = mysql_real_escape_string($priimek);
		$priimek = str_replace( "[^A-Za-z0-9", " ", $priimek);
		
		$email = $_POST['email'];
		$email = stripslashes($email);
		$email = strip_tags($email);
		
		$naslov = $_POST['naslov'];
		$naslov = stripslashes($naslov);
		$naslov = strip_tags($naslov);
		$naslov = mysql_real_escape_string($naslov);
				
		$query = "UPDATE uporabnik
				  SET ime = '$ime', priimek = '$priimek', email = '$email', naslov = '$naslov'
				  WHERE id_uporabnik ='".$id."'";
		
		mysql_query($query);
		mysql_close();
		header("Location: urediProfil.php");
	}
	elseif (isset($_POST['staroGeslo'])) {
		$staroGeslo = md5($_POST['staroGeslo']);
		if ($staroGeslo == $row['geslo']) {
			if ($_POST['novoGeslo'] == $_POST['novoGeslo2']) {
				$novoGeslo = md5($_POST['novoGeslo']);
				$query = "UPDATE uporabnik
				  			SET geslo = '$novoGeslo'
				  			WHERE id_uporabnik ='".$id."'";
				$error = "Geslo uspešno zamenjano.";
				mysql_query($query);
				mysql_close();
			} else {
				$error .= "Nova gesla se ne ujemata!";
			}
		} else {
			$error .= "Staro geslo ni pravilno!";
		}
	}
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
				  		<h3>Uredi profil</h3>
                        <div class="contact-form">
                              <form action='' method='POST'>
                                  <div>
                                      <span><label>IME</label></span>
                                      <span><input type="text" name="ime" value="<?php echo $row['ime'];?>"></span>
                                  </div>
                                  <div>
                                      <span><label>PRIIMEK</label></span>
                                      <span><input type="text" name="priimek" value="<?php echo $row['priimek'];?>"></span>
                                  </div>
                                  <div>
                                      <span><label>E-MAIL</label></span>
                                      <span><input type="text" name="email" value="<?php echo $row['email'];?>"></span>
                                  </div>
                                  <div>
                                      <span><label>NASLOV</label></span>
                                      <span><input type="text" name="naslov" value="<?php echo $row['naslov'];?>"></span>
                                  </div>
                                  <div>
                                      <span><input type="submit" value="Uredi"></span>
                                  </div>
                              </form>
                        </div>
                        <h3>Spremeni geslo</h3>
                        <div class="contact-form">
                              <form action='' method='POST'>
                                  <div>
                                      <span><label>STARO GESLO</label></span>
                                      <span><input type="password" name="staroGeslo"></span>
                                  </div>
                                  <div>
                                      <span><label>NOVO GESLO</label></span>
                                      <span><input type="password" name="novoGeslo"></span>
                                  </div>
                                  <div>
                                      <span><label>NOVO GESLO</label></span>
                                      <span><input type="password" name="novoGeslo2"></span>
                                  </div>
                                  <div>
                                      <span><input type="submit" value="Spremeni"></span>
                                  </div>
                                  <?php echo $error;?>
                              </form>
                              
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