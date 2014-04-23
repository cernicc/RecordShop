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
			<div class="clear"> </div>
			<?php include "footer.php";?>  <!-- Footer -->
        </div> <!---End-wrap--->
	</body>
</html>