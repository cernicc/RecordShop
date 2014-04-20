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
?>


