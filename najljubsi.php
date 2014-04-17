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
				$(document).ready(function() {
				$('a.login-window').click(function() {
					
							//Getting the variable's value from a link 
					var loginBox = $(this).attr('href');
				
					//Fade in the Popup
					$(loginBox).fadeIn(300);
					
					//Set the center alignment padding + border see css style
					var popMargTop = ($(loginBox).height() + 24) / 2; 
					var popMargLeft = ($(loginBox).width() + 24) / 2; 
					
					$(loginBox).css({ 
						'margin-top' : -popMargTop,
						'margin-left' : -popMargLeft
					});
					
					// Add the mask to body
					$('body').append('<div id="mask"></div>');
					$('#mask').fadeIn(300);
					
					return false;
				});
				
				// When clicking on the button close or the mask layer the popup closed
				$('a.close, #mask').live('click', function() { 
				  $('#mask , .login-popup').fadeOut(300 , function() {
					$('#mask').remove();  
				}); 
				return false;
				});
				});
		  </script>
	</head>
	<body>
		<!---start-wrap--->
		<div class="wrap">
			<!---start-header--->
			<div class="header">
			<!---start-top-header--->
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
						<li><a href="#login-box" class="login-window">Prijava</a></li>
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
					<li class="active1"><a href="najljubsi.php">Najljubši</a></li>
					<li><a href="izvajalci.php">Izvajalci</a></li>
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
			</div><br />
				<div class="content">
					<div class="products-box">
					<div class="products">
						<h5><span>NAJLJUBŠI </span>ALBUMI</h5>
						<div class="section group">
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/h1.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4>$512.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
						   </div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/h2.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								<h4>$300.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
						    </div>
							<div class="grid_1_of_5 images_1_of_5">
								<img src="images/h3.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4>$120.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
							</div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/h4.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4>$500.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
							</div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/h5.jpg">
								 <h3>Lorem Ipsum is simply</h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4>$120.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
							</div>
						</div>
						<div class="section group">
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/h3.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><span>$600.00</span>$512.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
						   </div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/h2.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><span>$400.00</span>$352.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
						    </div>
							<div class="grid_1_of_5 images_1_of_5">
								<img src="images/g7.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								  <h4><span>$300.00</span>$202.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
							</div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/h1.jpg">
								 <h3>Lorem Ipsum is simply </h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><span>$400.00</span>$322.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
							</div>
							<div class="grid_1_of_5 images_1_of_5">
								 <img src="images/h5.jpg">
								 <h3>Lorem Ipsum is simply</h3>
								 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
								 <h4><span>$700.00</span>$602.00</h4>
							     <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
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