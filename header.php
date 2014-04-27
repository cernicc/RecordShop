<?php 
$Domov = "";
$Najljubsi = "";
$Izvajalci = "";
$Kontakt = "";

$menuLinkID = basename($_SERVER['PHP_SELF'],".php");
if($menuLinkID == "index"){
	$Domov = 'class="active1"';
}
elseif($menuLinkID == "najljubsi"){
	$Najljubsi = 'class="active1"';
}
elseif($menuLinkID == "izvajalci"){
	$Izvajalci = 'class="active1"';
}
elseif($menuLinkID == "kontakt"){
	$Kontakt = 'class="active1"';
}
?>
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
        <div class='sub-header-right'>
        	<ul>
			<?php
            if (isset($_SESSION['id'])){
                echo "<li><a href='odjava.php'>Odjava</a></li>";
                echo "<li><a href='profil.php'>Profil</a></li>";
				if ($_SESSION['jeAdmin'] == 1){
                    echo "<li><a class='menu' href='admin.php'>Admin</a></li>";
                }
				echo "<li><a href='cart.php'>Košarica<img src='images/cart.png' title='cart' /></a></li>";
            } else {
                echo "<li><a href='prijava.php'>Prijava</a></li>";
                echo "<li><a href='registriraj.php'>Registracija</a></li>";
            }
            ?>
        	</ul>
        </div>
        <div class="clear"> </div>
    </div>
    <div class="clear"> </div>
    <div class="top-nav">
        <ul>
            <li <?php echo $Domov; ?>><a href="index.php">Domov</a></li>
            <li <?php echo $Najljubsi; ?>><a href="najljubsi.php">Najljubši</a></li>
            <li <?php echo $Izvajalci; ?>><a href="izvajalci.php">Izvajalci</a></li>
            <li <?php echo $Kontakt; ?>><a href="kontakt.php">Kontakt</a></li>
            <div class="clear"> </div>
        </ul>
    </div>
</div>