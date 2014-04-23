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
        <?php
        echo "<div class='sub-header-right'>";
            echo "<ul>";
                if (isset($_SESSION['username'])){
                    echo "<li><a href='odjava.php'>Odjava</a></li>";
                    echo "<li><a href='#'>Profil</a></li>";
                }
                    /*
                    if ($_SESSION['je_admin']){
                        echo "<li><a class='menu' href='admin.php'>Admin</a></li>";
                    }
                    */
                else{
    
                    //echo "<li><a href='#login-box' class='login-window'>Prijava</a></li>";
    
                    echo "<li><a href='prijava.php' class='login-window'>Prijava</a></li>";
                    echo "<li><a href='registriraj.php'>Registracija</a></li>";
                }
                echo "<li><a href='#'>Košarica: (Prazno) <img src='images/cart.png' title='cart' /></a></li>";
                echo "</ul>";
        echo "</div>";
        
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
            <li <?php echo $Domov; ?>><a href="index.php">Domov</a></li>
            <li <?php echo $Najljubsi; ?>><a href="najljubsi.php">Najljubši</a></li>
            <li <?php echo $Izvajalci; ?>><a href="izvajalci.php">Izvajalci</a></li>
            <li <?php echo $Kontakt; ?>><a href="kontakt.php">Kontakt</a></li>
            <div class="clear"> </div>
        </ul>
    </div>
</div>