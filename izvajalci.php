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
			<?php include "header.php";?> <!-- Header -->
			<div class="content">
				<div class="Cartires"> <!--start-cartires-page---->
					<h5><span>Izvajalci</span></h5>
					<div class="cartires-grids">
						<div class="cartire-grid">
							<div class="cartire-grid-img">
								<img src="images/a1.jpg" title="tries" />
							</div>
							<div class="cartire-grid-info">
								<ul>
									<li><span>Novo</span>|&nbsp;&nbsp;na voljo !</li>
								</ul>
								<h3>Fondmetal 7500</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>
							<div class="cartire-grid-cartinfo">
								<h4>Cena!</h4>
								<span>$502.00</span><br><br>
								<a href="singlepage.html">Dodaj v košarico</a><br />
								<a href="singlepage.html">Več info</a>
							</div>
							<div class="clear"> </div>
						</div><br />
						<div class="cartire-grid">
							<div class="cartire-grid-img">
								<img src="images/a2.jpg" title="tries" />
							</div>
							<div class="cartire-grid-info">
								<ul>
									<li><span>Novo</span>|&nbsp;&nbsp;na voljo !</li>
								</ul>
								<h3>Fondmetal 7500</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>
							<div class="cartire-grid-cartinfo">
								<h4>Cena!</h4>
								<span>$502.00</span><br><br>
								<a href="singlepage.html">Dodaj v košarico</a><br />
								<a href="singlepage.html">Več info</a>
							</div>
							<div class="clear"> </div>
						</div><br />
						<div class="cartire-grid">
							<div class="cartire-grid-img">
								<img src="images/a3.jpg" title="tries" />
							</div>
							<div class="cartire-grid-info">
								<ul>
									<li><span>Novo</span>|&nbsp;&nbsp;na voljo !</li>
								</ul>
								<h3>Fondmetal 7500</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>
							<div class="cartire-grid-cartinfo">
								<h4>Cena!</h4>
								<span>$502.00</span><br><br>
								<a href="singlepage.html">Dodaj v košarico</a><br />
								<a href="singlepage.html">Več info</a>
							</div>
							<div class="clear"> </div>
						</div><br />
						<div class="cartire-grid">
							<div class="cartire-grid-img">
								<img src="images/a4.jpg" title="tries" />
							</div>
							<div class="cartire-grid-info">
								<ul>
									<li><span>Novo</span>|&nbsp;&nbsp;na voljo !</li>
								</ul>
								<h3>Fondmetal 7500</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>
							<div class="cartire-grid-cartinfo">
								<h4>Cena!</h4>
								<span>$502.00</span><br><br>
								<a href="singlepage.html">Dodaj v košarico</a><br />
								<a href="singlepage.html">Več info</a>
							</div>
							<div class="clear"> </div>
						</div><br />
					</div>
				</div> <!--End-cartires-page---->
			</div>
			<div class="clear"> </div>
			<?php include "footer.php";?>  <!-- Footer -->
        </div> <!---End-wrap--->
	</body>
</html>