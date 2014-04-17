<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Music Store</title>
<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<!---start-wrap--->
<div class="wrap"> 
  <!---start-header--->
  <div class="header">
    <div class="sub-header">
      <div class="logo"> <a href="index.html"><img src="images/logo.png" title="logo" /></a> </div>
      <div class="sub-header-center">
        <form>
          <input type="text">
          <input type="submit"  value="Išči" />
        </form>
      </div>
      <div class="sub-header-right">
        <ul>
          <li><a href="#">Prijava</a></li>
          <li><a href="#">Profil</a></li>
          <li><a href="#">Košarica: (Prazno) <img src="images/cart.png" title="cart" /></a></li>
        </ul>
      </div>
      <div class="clear"> </div>
    </div>
    <div class="clear"> </div>
    <div class="top-nav">
      <ul>
        <li class="active1"><a href="index.php">Domov</a></li>
        <li><a href="#">Najljubši</a></li>
        <li><a href="#">Ustvarjalci</a></li>
        <li><a href="#">Kontakt</a></li>
        <div class="clear"> </div>
      </ul>
    </div>
    <!---end-top-header---> 
    <!---End-header---> 
  </div>
  <br />
  

  <div class="content">
    <div class="products-box">
      <div class="products">
        <h5><span>NEW </span>ALBUMS</h5>
        <div class="section group">
        
        
        
        <?php

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

$sql = "SELECT * FROM album";

$result = mysql_query($sql);

if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

// While a row of data exists, put that row in $row as an associative array
// Note: If you're expecting just one row, no need to use a loop
// Note: If you put extract($row); inside the following loop, you'll
//       then create $userid, $fullname, and $userstatus
while ($row = mysql_fetch_assoc($result)) {
    echo '<div class="grid_1_of_5 images_1_of_5"> <img src="images/h1.jpg">';
	echo '<h3>'.$row["naslov"].'</h3>';
	echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>';
	echo '<h4> $'.$row["cena"].'</h4>';
	echo '<div class="button"><span><a href="singlepage.html">Read More</a></span></div>';
    echo '</div>';

}

mysql_free_result($result);

?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
          <div class="grid_1_of_5 images_1_of_5"> <img src="images/h1.jpg">
            <h3>Lorem Ipsum is simply </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, in reprehenderit.</p>
            <h4>$512.00</h4>
            <div class="button"><span><a href="singlepage.html">Read More</a></span></div>
          </div>
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
          <li><a href="#">O nas</a></li>
          <li><a href="#">Kontakt</a></li>
        </ul>
      </div>
      <div class="col_1_of_4 span_1_of_4">
        <h3>Ponudba</h3>
        <ul>
          <li><a href="#">Novo</a></li>
          <li><a href="#">Najbolse ocenjeni</a></li>
        </ul>
      </div>
      <div class="col_1_of_4 span_1_of_4">
        <h3>Profil</h3>
        <ul>
          <li><a href="#">Vaš profil</a></li>
          <li><a href="#">Uredi profil</a></li>
        </ul>
      </div>
      <div class="col_1_of_4 span_1_of_4 footer-lastgrid">
        <h3>Get in touch</h3>
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
</div>
<!---End-wrap--->
</body>
</html>
