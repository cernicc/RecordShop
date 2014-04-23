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
                                // preverimo, če je uporabnik že prijavljen, če teče seja...
                                if (isset($_SESSION['id'])){
                                    header("location:index.php");
                                    echo "UPORABNIK JE ŽE PRIJAVLJEN!!!";
                                    die();
                                } else{
                                    $username = "";
                                    $match = true;


                                    if (isset($_POST['login'])){
                                        echo"LOGIN!!!!!!!!!";
                                        $username = $_POST['username'];
                                        //echo "$username";
                                       
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

                                        echo "<form id='loginForm' name='loginForm'action='prijava.php' method='POST' class='signin'>";
                                        echo "<fieldset class='textbox'>";
                                        echo"<label class='username''>";
                                        echo"<span>Uporabniško ime</span>";
                                        echo"<input id='username' name='username' type='text' autocomplete='on' placeholder='Uporabniško ime'></label>";
                                        echo "<label class='password'>";
                                        echo "<span>Geslo</span>";
                                        echo "<input id='password' name='password' value='$username'  type='password' placeholder='Geslo'>";
                                        echo "</label>";
                                        echo "<input type='submit' value='Vpiši me' name='login' id='btnLogin' class='submit button'>";
                                        echo "<p>";
                                        echo "<a class='forgot' href='#'>Ste pozabili geslo?</a>";
                                        echo "<br/>";
                                        echo "<a clas='forgot' href='registriraj.php'>Še nimate našega računa?</a>";
                                        echo "</p>";
                                        echo "</fieldset>";
                                        echo "</form>";
                                        /*
                                        echo "DREK!!!!";
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
                                        */
                                    }
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